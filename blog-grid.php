<?php 
// blog-grid.php
include '_data/data.php';
include '_data/db.php';

// ----------------------------------------------------
// 0. INPUTS (search, category, tag)
// ----------------------------------------------------
$search = isset($_GET['q']) ? trim($_GET['q']) : "";
$categoryFilterId = isset($_GET['cat_id']) ? intval($_GET['cat_id']) : 0;
$tagFilterSlug = isset($_GET['tag']) ? trim($_GET['tag']) : ""; 

$searchSQL = "";
$searchParam = [];

// Case-insensitive search
$lowerSearch = strtolower($search);
if ($search != "") {
    $searchSQL .= " AND (LOWER(p.title) LIKE ? OR LOWER(p.content) LIKE ?) ";
    $searchParam[] = "%$lowerSearch%";
    $searchParam[] = "%$lowerSearch%";
}

// Category filter
if ($categoryFilterId > 0) {
    $searchSQL .= " AND p.category_id = ? ";
    $searchParam[] = $categoryFilterId;
}

// Tag filter
if ($tagFilterSlug) {
    // 1. Find the Tag ID from the slug
    $tagCheck = $conn->prepare("SELECT id FROM tags WHERE slug = ?");
    $tagCheck->execute([$tagFilterSlug]);
    $tagId = $tagCheck->fetchColumn();

    // 2. Add SQL filter using the post_tags join table
    if ($tagId) {
        $searchSQL .= " AND p.id IN (SELECT post_id FROM post_tags WHERE tag_id = ?) ";
        $searchParam[] = $tagId;
    }
}

// ----------------------------------------------------
// PAGINATION & FETCH
// ----------------------------------------------------
$postsPerPage = 12;
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$start = ($page - 1) * $postsPerPage;

// COUNT TOTAL POSTS
$totalQuery = "SELECT COUNT(*) FROM posts p WHERE p.status = 'published' $searchSQL";
$totalStmt = $conn->prepare($totalQuery);
$totalStmt->execute($searchParam);
$totalPosts = $totalStmt->fetchColumn();
$totalPages = ($totalPosts > 0) ? ceil($totalPosts / $postsPerPage) : 1;

// FETCH POSTS
$query = "
    SELECT p.*, c.name AS category_name 
    FROM posts p
    LEFT JOIN categories c ON p.category_id = c.id
    WHERE p.status = 'published' $searchSQL
    ORDER BY p.id DESC
    LIMIT ?, ?
";

$stmt = $conn->prepare($query);

// Bind search/category/tag params
$paramIndex = 1;
foreach ($searchParam as $param) {
    // use PARAM_STR for both strings and ints (safe for binding)
    $stmt->bindValue($paramIndex, $param, PDO::PARAM_STR); 
    $paramIndex++;
}

// Bind LIMIT params (last two)
$stmt->bindValue($paramIndex, $start, PDO::PARAM_INT);
$stmt->bindValue($paramIndex + 1, $postsPerPage, PDO::PARAM_INT);

$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ----------------------------------------------------
// SIDEBAR DATA (for filters)
// ----------------------------------------------------
$catStmt = $conn->query("
    SELECT c.id, c.name, COUNT(p.id) AS total_posts 
    FROM categories c 
    LEFT JOIN posts p ON p.category_id = c.id AND p.status='published' 
    GROUP BY c.id 
    ORDER BY c.name ASC
");
$categoriesList = $catStmt->fetchAll(PDO::FETCH_ASSOC);

$tagStmt = $conn->query("
    SELECT t.name, t.slug, COUNT(pt.post_id) AS total_posts 
    FROM tags t 
    JOIN post_tags pt ON t.id = pt.tag_id 
    JOIN posts p ON pt.post_id = p.id AND p.status = 'published'
    GROUP BY t.id
    ORDER BY total_posts DESC 
    LIMIT 15
");
$tagsList = $tagStmt->fetchAll(PDO::FETCH_ASSOC);

// ----------------------------------------------------
// Helper: highlight search in excerpt
// ----------------------------------------------------
function renderPostExcerpt($content, $search, $length = 120) {
    $plain = strip_tags($content);
    if (mb_strlen($plain) > $length) {
        $excerpt = mb_substr($plain, 0, $length) . '...';
    } else {
        $excerpt = $plain;
    }

    if (!empty($search)) {
        $pattern = '/' . preg_quote($search, '/') . '/i';
        $excerpt = preg_replace($pattern, '<mark>$0</mark>', $excerpt);
    }
    return $excerpt;
}

// ----------------------------------------------------
// AJAX RESPONSE (returns only posts HTML + pagination)
// ----------------------------------------------------
if (isset($_GET['ajax']) && $_GET['ajax'] == '1') {
    if (count($posts) > 0) {
        foreach ($posts as $post) {
            ?>
            <div class="col-lg-6 col-md-12 grid-post-item">
                <div class="blog-block">
                    <div class="blog-list-item">

                        <div class="blog-image">
                            <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                <img src="../blog-admin-capitalkaro/uploads/<?= htmlspecialchars($post['featured_image']); ?>" 
                                     alt="<?= htmlspecialchars($post['title']); ?>">
                            </a>
                        </div>
                        
                        <div class="blog-item-tagline">
                            <a href="#" class="category-filter-link" data-cat-id="<?= $post['category_id']; ?>">
                                <?= htmlspecialchars($post['category_name']); ?>
                            </a>
                        </div>

                        <div class="blog-item-meta">
                            <p><a href="#">By <?= htmlspecialchars($post['author']); ?></a></p>
                            <p>On <?= date("d M Y", strtotime($post['created_at'])); ?></p>
                        </div>

                        <div class="blog-item-details">
                            <h3>
                                <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                    <?= htmlspecialchars($post['title']); ?>
                                </a>
                            </h3>

                            <p><?= renderPostExcerpt($post['content'], $search, 120); ?></p>

                            <a href="blog-details/<?= urlencode($post['slug']); ?>" class="btn-link">
                                <span>continue reading</span> 
                                <i class="flaticon-next"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        }

        // pagination block
        ?>
        <div class="col-12">
            <div class="blog-block mb-0">
                <ul class="pagination">
                    <?php if ($page > 1): ?>
                        <li><a href="#" data-page="<?= $page - 1; ?>">&laquo;</a></li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="<?= ($i == $page) ? 'active' : '' ?>">
                            <a href="#" data-page="<?= $i; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <li><a href="#" data-page="<?= $page + 1; ?>">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php
    } else {
        echo '<div class="col-12"><p>No posts found matching the criteria.</p></div>';
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '_inc/seo.php'; ?>
    <?php include '_inc/skin.php'; ?>
    <style>
        /* Grid & top-filters styling */
        .top-filter-bar {
            display:flex;
            gap:12px;
            align-items:center;
            margin-bottom:24px;
            flex-wrap:wrap;
        }
        .top-filter-bar .search-box { flex:1 1 320px; display:flex; }
        .top-filter-bar .search-box input { width:100%; padding:10px 12px; border-radius:6px 0 0 6px; border:1px solid #ddd; }
        .top-filter-bar .search-box button { padding:10px 14px; border-radius:0 6px 6px 0; border:1px solid #ddd; background:#fff; cursor:pointer; }
        .top-filter-bar select { padding:10px; border-radius:6px; border:1px solid #ddd; min-width:180px; }

        .grid-post-item { margin-bottom: 20px; }
        .blog-image img { width:100%; height:260px; object-fit:cover; border-radius:10px; }
        .blog-item-tagline a { font-size:12px; font-weight:700; color:#ff5722; text-transform:uppercase; }
        mark { background-color: #ffeb3b; color: #111; padding: 0 1px; border-radius: 2px; }
        .loading-content { opacity:0.6; pointer-events:none; transition:opacity .15s; }
        /* pagination small tweaks */
        ul.pagination { display:flex; gap:6px; list-style:none; padding:0; margin:20px 0; flex-wrap:wrap; }
        ul.pagination li { display:inline-block; }
        ul.pagination li a { display:inline-block; padding:6px 10px; border-radius:4px; border:1px solid #eee; text-decoration:none; }
        ul.pagination li.active a { background:#ff5722; color:#fff; border-color:#ff5722; }
    </style>
</head>

<body class="custom-cursor">

<?php include '_inc/pre-loader.php'; ?>
<?php include '_inc/header.php'; ?>

<div class="inner-page-hero" style="background-image: url(assets/images/background/blog-hero-bg.jpg);">
    <div class="container">
        <div class="hero-heading-title">
            <h2>Blog Grid 2 Columns</h2>
        </div>
        <ul class="bradcrumb">
            <li><a href="index">Home</a></li>
            <li><a href="blog-grid">Blog Grid</a></li>
        </ul>
    </div>
</div>

<div class="blog-list-section">
    <div class="container">

        <!-- Top filter bar (Option B) -->
        <div class="top-filter-bar">
            <div class="search-box">
                <input type="search" id="search-input" name="q" placeholder="Search posts..." value="<?= htmlspecialchars($search); ?>">
                <button id="search-button" type="button"><i class="flaticon-search-interface-symbol"></i></button>
            </div>

            <select id="category-select" aria-label="Filter by category">
                <option value="0">All Categories</option>
                <?php foreach ($categoriesList as $cat): ?>
                    <option value="<?= $cat['id']; ?>" <?= ($cat['id'] == $categoryFilterId) ? 'selected' : ''; ?>>
                        <?= htmlspecialchars($cat['name']); ?> (<?= $cat['total_posts']; ?>)
                    </option>
                <?php endforeach; ?>
            </select>

            <select id="tag-select" aria-label="Filter by tag">
                <option value="">All Tags</option>
                <?php foreach ($tagsList as $tag): ?>
                    <option value="<?= htmlspecialchars($tag['slug']); ?>" <?= ($tag['slug'] == $tagFilterSlug) ? 'selected' : ''; ?>>
                        <?= htmlspecialchars($tag['name']); ?> (<?= $tag['total_posts']; ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row" id="blog-results-container">
            <!-- Initial server-rendered posts (same markup as AJAX response) -->
            <?php if (count($posts) > 0): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="col-lg-6 col-md-12 grid-post-item">
                        <div class="blog-block">
                            <div class="blog-list-item">

                                <div class="blog-image">
                                    <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                        <img src="../blog-admin-capitalkaro/uploads/<?= htmlspecialchars($post['featured_image']); ?>" 
                                             alt="<?= htmlspecialchars($post['title']); ?>">
                                    </a>
                                </div>
                                
                                <div class="blog-item-tagline">
                                    <a href="#" class="category-filter-link" data-cat-id="<?= $post['category_id']; ?>">
                                        <?= htmlspecialchars($post['category_name']); ?>
                                    </a>
                                </div>

                                <div class="blog-item-meta">
                                    <p><a href="#">By <?= htmlspecialchars($post['author']); ?></a></p>
                                    <p>On <?= date("d M Y", strtotime($post['created_at'])); ?></p>
                                </div>

                                <div class="blog-item-details">
                                    <h3>
                                        <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                            <?= htmlspecialchars($post['title']); ?>
                                        </a>
                                    </h3>

                                    <p><?= renderPostExcerpt($post['content'], $search, 120); ?></p>

                                    <a href="blog-details/<?= urlencode($post['slug']); ?>" class="btn-link">
                                        <span>continue reading</span> 
                                        <i class="flaticon-next"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Pagination (server-rendered for first load) -->
                <div class="col-12">
                    <div class="blog-block">
                        <ul class="pagination">
                            <?php if ($page > 1): ?>
                                <li><a href="#" data-page="<?= $page - 1; ?>">&laquo;</a></li>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li class="<?= ($i == $page) ? 'active' : '' ?>">
                                    <a href="#" data-page="<?= $i; ?>"><?= $i; ?></a>
                                </li>
                            <?php endfor; ?>

                            <?php if ($page < $totalPages): ?>
                                <li><a href="#" data-page="<?= $page + 1; ?>">&raquo;</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

            <?php else: ?>
                <div class="col-12">
                    <p>No blog posts found matching the current criteria.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>

<?php include '_inc/footer.php'; ?>
<?php include '_inc/footer-js.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// AJAX Search + Category + Tag logic (top-bar version)
$(document).ready(function() {
    var searchRequest = null;
    var timer = null;

    // Read initial values from URL (so pushState behavior and manual load stay in sync)
    function getUrlParams() {
        var urlParams = new URLSearchParams(window.location.search);
        return {
            q: urlParams.get('q') || '',
            cat_id: parseInt(urlParams.get('cat_id') || 0),
            tag: urlParams.get('tag') || '',
            page: parseInt(urlParams.get('page') || 1)
        };
    }

    // Build query string for pushState (keeps params consistent)
    function buildQuery(q, page, catId, tagSlug) {
        var params = new URLSearchParams();
        if (q) params.set('q', q);
        if (page && page > 1) params.set('page', page);
        if (catId && catId > 0) params.set('cat_id', catId);
        if (tagSlug) params.set('tag', tagSlug);
        return '?' + params.toString();
    }

    function fetchPosts(query, page, catId, tagSlug) {
        $('#blog-results-container').addClass('loading-content');

        if (searchRequest !== null) {
            searchRequest.abort();
        }

        searchRequest = $.ajax({
            url: window.location.pathname,
            method: 'GET',
            data: { ajax: '1', q: query, page: page, cat_id: catId, tag: tagSlug },
            success: function(data) {
                $('#blog-results-container').html(data).removeClass('loading-content');

                // Update URL
                var newUrl = buildQuery(query, page, catId, tagSlug);
                window.history.pushState({path: newUrl}, '', newUrl);

                // Update selects / active styles
                if (catId && catId > 0) {
                    $('#category-select').val(catId);
                    $('.category-filter-link').removeClass('active-category');
                    $('.category-filter-link[data-cat-id="' + catId + '"]').addClass('active-category');
                } else {
                    $('#category-select').val('0');
                    $('.category-filter-link').removeClass('active-category');
                }

                if (tagSlug) {
                    $('#tag-select').val(tagSlug);
                    $('.tag-filter-link').removeClass('active-tag');
                    $('.tag-filter-link[data-tag-slug="' + tagSlug + '"]').addClass('active-tag');
                } else {
                    $('#tag-select').val('');
                    $('.tag-filter-link').removeClass('active-tag');
                }

                // scroll to top of grid
                $('html, body').animate({ scrollTop: $(".blog-list-section").offset().top - 120 }, 300);
            },
            error: function(xhr, status, err) {
                if (status !== 'abort') {
                    $('#blog-results-container').removeClass('loading-content');
                    console.error('Error fetching posts:', err);
                }
            }
        });
    }

    // --- Events ---

    // Search input (debounced)
    $('#search-input').on('keyup', function(e) {
        var query = $(this).val();
        var catId = parseInt($('#category-select').val() || 0);
        var tagSlug = $('#tag-select').val() || '';

        clearTimeout(timer);
        timer = setTimeout(function() {
            fetchPosts(query, 1, catId, tagSlug);
        }, 300);
    });

    // Click search button (immediate)
    $('#search-button').on('click', function() {
        var query = $('#search-input').val();
        var catId = parseInt($('#category-select').val() || 0);
        var tagSlug = $('#tag-select').val() || '';
        fetchPosts(query, 1, catId, tagSlug);
    });

    // Category select change
    $('#category-select').on('change', function() {
        var catId = parseInt($(this).val() || 0);
        var query = $('#search-input').val();
        var tagSlug = $('#tag-select').val() || '';
        fetchPosts(query, 1, catId, tagSlug);
    });

    // Tag select change
    $('#tag-select').on('change', function() {
        var tagSlug = $(this).val() || '';
        var query = $('#search-input').val();
        var catId = parseInt($('#category-select').val() || 0);
        fetchPosts(query, 1, catId, tagSlug);
    });

    // Pagination (delegated)
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        if (!page) return;

        var query = $('#search-input').val();
        var catId = parseInt($('#category-select').val() || 0);
        var tagSlug = $('#tag-select').val() || '';

        fetchPosts(query, page, catId, tagSlug);
    });

    // Category link inside card (delegated)
    $(document).on('click', '.category-filter-link', function(e) {
        e.preventDefault();
        var newCatId = $(this).data('cat-id') || 0;
        var currentCat = parseInt($('#category-select').val() || 0);

        // toggle if same
        if (newCatId == currentCat) newCatId = 0;

        var query = $('#search-input').val();
        var tagSlug = $('#tag-select').val() || '';

        $('#category-select').val(newCatId);
        fetchPosts(query, 1, newCatId, tagSlug);
    });

    // Tag links inside card (if you later add tags there)
    $(document).on('click', '.tag-filter-link', function(e) {
        e.preventDefault();
        var newTag = $(this).data('tag-slug') || '';
        var currentTag = $('#tag-select').val() || '';

        if (newTag == currentTag) newTag = '';

        var query = $('#search-input').val();
        var catId = parseInt($('#category-select').val() || 0);

        $('#tag-select').val(newTag);
        fetchPosts(query, 1, catId, newTag);
    });

    // Handle browser back/forward to re-run AJAX with correct params
    window.onpopstate = function(event) {
        var p = getUrlParams();
        $('#search-input').val(p.q);
        $('#category-select').val(p.cat_id);
        $('#tag-select').val(p.tag);
        fetchPosts(p.q, p.page, p.cat_id, p.tag);
    };
});
</script>

</body>
</html>
