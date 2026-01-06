<?php
include '_data/data.php';
include '_data/db.php';

// ----------------------------------------------------
// 1. SHARED LOGIC (Search, Category Filter & Pagination)
// ----------------------------------------------------
$search = isset($_GET['q']) ? trim($_GET['q']) : "";
$categoryFilterId = isset($_GET['cat_id']) ? intval($_GET['cat_id']) : 0;
$tagFilterSlug = isset($_GET['tag']) ? trim($_GET['tag']) : ""; // NEW TAG FILTER PARAM

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

// ----------------------------------------------------
// TAG FILTER LOGIC (NEW)
// ----------------------------------------------------
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


$postsPerPage = 5;
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$start = ($page - 1) * $postsPerPage;

// Count total
$totalQuery = "SELECT COUNT(*) FROM posts p WHERE p.status = 'published' $searchSQL";
$totalStmt = $conn->prepare($totalQuery);
$totalStmt->execute($searchParam);
$totalPosts = $totalStmt->fetchColumn();
$totalPages = ceil($totalPosts / $postsPerPage);

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
    // Use PDO::PARAM_STR for all dynamic parameters (safe for binding strings/integers)
    $stmt->bindValue($paramIndex, $param, PDO::PARAM_STR); 
    $paramIndex++;
}

// Bind LIMIT params
$stmt->bindValue($paramIndex, $start, PDO::PARAM_INT);
$stmt->bindValue($paramIndex + 1, $postsPerPage, PDO::PARAM_INT);

$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// ----------------------------------------------------
// HTML excerpt function
// ----------------------------------------------------
function renderPostExcerpt($content, $search) {
    $excerpt = substr(strip_tags($content), 0, 150) . '...';

    if (!empty($search)) {
        $pattern = '/' . preg_quote($search, '/') . '/i';
        $excerpt = preg_replace($pattern, '<mark>$0</mark>', $excerpt);
    }
    return $excerpt;
}


// ----------------------------------------------------
// 2. AJAX HANDLER — RETURNS ONLY HTML BLOCKS
// ----------------------------------------------------
if (isset($_GET['ajax']) && $_GET['ajax'] == '1') {
    if (count($posts) > 0) {
        foreach ($posts as $post) {
            ?>
            <div class="blog-block">
                <div class="blog-list-item">
                    <div class="blog-image">
                        <a href="blog-details/<?= urlencode($post['slug']); ?>">
                            <img src="../blog-admin-capitalkaro/uploads/<?= $post['featured_image']; ?>"
                                    alt="<?= htmlspecialchars($post['title']); ?>">
                        </a>
                    </div>

                    <div class="blog-item-tagline">
                        <a href="#" class="category-filter-link" data-cat-id="<?= $post['category_id']; ?>">
                            <?= $post['category_name']; ?>
                        </a>
                    </div>

                    <div class="blog-item-meta">
                        <p><a href="#">By <?= htmlspecialchars($post['author']); ?></a></p>
                        <p>On <?= date("d M Y", strtotime($post['created_at'])); ?></p>
                    </div>

                    <div class="blog-item-details">
                        <h3>
                            <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                <?= $post['title']; ?>
                            </a>
                        </h3>

                        <p><?= renderPostExcerpt($post['content'], $search); ?></p> 

                        <a href="blog-details/<?= urlencode($post['slug']); ?>" class="btn-link">
                            <span>continue reading</span>
                            <i class="flaticon-next"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }

        // PAGINATION HTML
        ?>
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
        <?php
    } else {
        echo '<div class="blog-block"><p>No posts found matching the criteria.</p></div>';
    }
    exit; // STOP HERE
}


// ----------------------------------------------------
// 3. NORMAL PAGE LOAD (Sidebar data fetch)
// ----------------------------------------------------
$recentStmt = $conn->query("SELECT title, slug, featured_image, created_at FROM posts WHERE status='published' ORDER BY id DESC LIMIT 4");
$recentPosts = $recentStmt->fetchAll(PDO::FETCH_ASSOC);

$catStmt = $conn->query("SELECT c.id, c.name, COUNT(p.id) AS total_posts FROM categories c LEFT JOIN posts p ON p.category_id = c.id AND p.status='published' GROUP BY c.id ORDER BY c.name ASC");
$categoriesList = $catStmt->fetchAll(PDO::FETCH_ASSOC);

// FETCH POPULAR TAGS (NEW)
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

// Update Filter Display Text
$currentFilterText = '';
if ($search) {
    $currentFilterText .= '🔍 Search results for: <b>' . htmlspecialchars($search) . '</b>';
}
if ($categoryFilterId > 0) {
    $catName = array_filter($categoriesList, fn($c) => $c['id'] == $categoryFilterId);
    $catName = reset($catName)['name'] ?? 'Unknown Category';
    $currentFilterText .= ($currentFilterText ? ' & ' : '') . 'Category: <b>' . htmlspecialchars($catName) . '</b>';
}
if ($tagFilterSlug) { // ADD TAG DISPLAY TEXT
    $tagName = array_filter($tagsList, fn($t) => $t['slug'] == $tagFilterSlug);
    $tagName = reset($tagName)['name'] ?? 'Unknown Tag';
    $currentFilterText .= ($currentFilterText ? ' & ' : '') . 'Tag: <b>' . htmlspecialchars($tagName) . '</b>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '_inc/seo.php'; ?>
    <?php include '_inc/skin.php'; ?>

    <style>
        .recent-blog-widget-item { display: flex; align-items: center; gap: 12px; margin-bottom: 15px; }
        .recent-blog-widget-item img { width: 75px; height: 75px; object-fit: cover; border-radius: 8px; }
        .blog-image img { width: 100%; height: 300px; border-radius: 12px; object-fit: cover; }
        .loading-content { opacity: 0.5; pointer-events: none; transition: opacity 0.2s; }
        mark { background-color: #ffeb3b; color: #111; padding: 0 1px; border-radius: 2px; }
        .category-widget ul li a.active-category { font-weight: bold; color: #ff5722; }
        
        /* New Tag Styling */
        .tag-widget {
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 8px;
        }
        .tag-widget .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        .tag-widget .tag-list li {
            background: #f8f8f8;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 1;
            display: flex;
            align-items: center;
        }
        .tag-widget .tag-list li a {
            color: #494949;
            text-decoration: none;
            margin-right: 5px;
        }
        .tag-widget .tag-list li span {
            color: #999;
            font-size: 12px;
        }
        .tag-widget .tag-list li a.active-tag {
            font-weight: bold;
            color: #007bff; /* Example active color */
        }
    </style>
</head>

<body class="custom-cursor">

<?php include '_inc/pre-loader.php'; ?>
<?php include '_inc/header.php'; ?>

<div class="inner-page-hero" style="background-image: url(assets/images/background/blog-hero-bg.jpg);">
    <div class="container">
        <div class="hero-heading-title"><h2>Blog Standard</h2></div>
        <ul class="bradcrumb">
            <li><a href="index">Home</a></li>
            <li><a href="blog">Blog</a></li>
            <li>Blog Standard</li>
        </ul>
    </div>
</div>

<div class="blog-list-section">
    <div class="container">
        <div class="row gutter-y-30">

            <div class="col-lg-8">
                <div id="blog-results-container">

                    <?php if ($currentFilterText): ?>
                        <h4 class="mb-4"><?= $currentFilterText; ?></h4>
                    <?php endif; ?>

                    <?php if (count($posts) > 0): ?>
                        <?php foreach ($posts as $post): ?>
                            <div class="blog-block">
                                <div class="blog-list-item">
                                    <div class="blog-image">
                                        <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                            <img src="../blog-admin-capitalkaro/uploads/<?= $post['featured_image']; ?>"
                                                    alt="<?= htmlspecialchars($post['title']); ?>">
                                        </a>
                                    </div>

                                    <div class="blog-item-tagline">
                                        <a href="#" class="category-filter-link" data-cat-id="<?= $post['category_id']; ?>">
                                            <?= $post['category_name']; ?>
                                        </a>
                                    </div>

                                    <div class="blog-item-meta">
                                        <p><a href="#">By <?= htmlspecialchars($post['author']); ?></a></p>
                                        <p>On <?= date("d M Y", strtotime($post['created_at'])); ?></p>
                                    </div>

                                    <div class="blog-item-details">
                                        <h3>
                                            <a href="blog-details/<?= urlencode($post['slug']); ?>">
                                                <?= $post['title']; ?>
                                            </a>
                                        </h3>

                                        <p><?= renderPostExcerpt($post['content'], $search); ?></p>

                                        <a href="blog-details/<?= urlencode($post['slug']); ?>" class="btn-link">
                                            <span>continue reading</span>
                                            <i class="flaticon-next"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

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

                    <?php else: ?>
                        <p>No blog posts found matching the criteria.</p>
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar stcky">

                    <div class="blog-block">
                        <div class="blog-serch-widget">
                            <form onsubmit="return false;">
                                <input type="search" id="search-input" name="q" placeholder="Search posts..." value="<?= htmlspecialchars($search); ?>">
                                <button type="button"><i class="flaticon-search-interface-symbol"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="blog-block">
                        <div class="category-widget">
                            <h4>Categories</h4>
                            <ul>
                                <?php foreach ($categoriesList as $cat): ?>
                                    <li>
                                        <a href="#"
                                           class="category-filter-link <?= ($cat['id'] == $categoryFilterId) ? 'active-category' : ''; ?>"
                                           data-cat-id="<?= $cat['id']; ?>">
                                            <?= $cat['name']; ?>
                                        </a>
                                        <span>(<?= $cat['total_posts']; ?>)</span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if ($categoryFilterId > 0): ?>
                                <ul>
                                    <li><a href="#" id="clear-category-filter">Clear Filter</a></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="blog-block">
                        <div class="recent-blog-widget">
                            <h4>Recent News</h4>

                            <?php foreach ($recentPosts as $r): ?>
                                <div class="recent-blog-widget-item">
                                    <img src="../blog-admin-capitalkaro/uploads/<?= $r['featured_image']; ?>" alt="<?= htmlspecialchars($r['title']); ?>">
                                    <div class="recent-blog-widget-item-title">
                                        <span><?= date("M d, Y", strtotime($r['created_at'])); ?></span>
                                        <a href="blog-details/<?= urlencode($r['slug']); ?>"><?= $r['title']; ?></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                    <?php if (!empty($tagsList)): ?>
                        <div class="blog-block">
                            <div class="tag-widget">
                                <h4>Tags</h4>
                                <ul class="tag-list">
                                    <?php foreach ($tagsList as $tag): ?>
                                        <li>
                                            <a href="#" 
                                               class="tag-filter-link <?= ($tag['slug'] == $tagFilterSlug) ? 'active-tag' : ''; ?>"
                                               data-tag-slug="<?= htmlspecialchars($tag['slug']); ?>">
                                                <?= htmlspecialchars($tag['name']); ?>
                                            </a>
                                            <span>(<?= $tag['total_posts']; ?>)</span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php if ($tagFilterSlug): ?>
                                    <ul>
                                        <li><a href="#" id="clear-tag-filter">Clear Tag Filter</a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
            </div>
            </div>
    </div>
</div>

<?php include '_inc/footer.php'; ?>
<?php include '_inc/footer-js.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// AJAX Search + Filter Logic
$(document).ready(function() {
    var searchRequest = null;
    var timer = null;

    function getCurrentFilters() {
        var query = $('#search-input').val() || '';
        var urlParams = new URLSearchParams(window.location.search);
        
        return {
            q: query,
            cat_id: parseInt(urlParams.get('cat_id') || 0),
            tag_slug: urlParams.get('tag') || '' // NEW
        };
    }

    function fetchPosts(query, page, catId, tagSlug) { // tagSlug added
        $('#blog-results-container').addClass('loading-content');

        if (searchRequest !== null) {
            searchRequest.abort();
        }

        catId = catId || 0;
        tagSlug = tagSlug || ''; // NEW

        searchRequest = $.ajax({
            url: window.location.pathname,
            method: 'GET',
            data: { ajax: '1', q: query, page: page, cat_id: catId, tag: tagSlug }, // tag: tagSlug added
            success: function(data) {
                $('#blog-results-container').html(data).removeClass('loading-content');

                // 1. Update URL History (Push State)
                var newUrl = "?q=" + encodeURIComponent(query) + "&page=" + page;
                if (catId > 0) newUrl += "&cat_id=" + catId;
                if (tagSlug) newUrl += "&tag=" + encodeURIComponent(tagSlug); // NEW
                
                window.history.pushState({path: newUrl}, '', newUrl);

                // 2. Update Active Category link styles
                $('.category-filter-link').removeClass('active-category');
                if (catId > 0) {
                    $('.category-filter-link[data-cat-id="' + catId + '"]').addClass('active-category');
                }

                // 3. Update Active Tag link styles (NEW)
                $('.tag-filter-link').removeClass('active-tag');
                if (tagSlug) {
                    $('.tag-filter-link[data-tag-slug="' + tagSlug + '"]').addClass('active-tag');
                }
            }
        });
    }

    // --- Event Handlers ---

    // 1. Search Handler 
    $('#search-input').on('keyup', function() {
        var query = $(this).val();
        var filters = getCurrentFilters();
        clearTimeout(timer);
        timer = setTimeout(function() {
            fetchPosts(query, 1, filters.cat_id, filters.tag_slug); // tag_slug added
        }, 300);
    });
    
    // 2. Pagination Handler 
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        var filters = getCurrentFilters();

        if (page) {
            fetchPosts(filters.q, page, filters.cat_id, filters.tag_slug); // tag_slug added
            $('html, body').animate({ scrollTop: $(".blog-list-section").offset().top - 100 }, 500);
        }
    });

    // 3. Category Filter Handler 
    $(document).on('click', '.category-filter-link', function(e) {
        e.preventDefault();
        var newCatId = $(this).data('cat-id');
        var filters = getCurrentFilters();

        if (newCatId === filters.cat_id) newCatId = 0;

        fetchPosts(filters.q, 1, newCatId, filters.tag_slug); // tag_slug added
    });

    // 4. Clear Category Filter Handler 
    $(document).on('click', '#clear-category-filter', function(e) {
        e.preventDefault();
        var filters = getCurrentFilters();
        fetchPosts(filters.q, 1, 0, filters.tag_slug); // tag_slug added
    });
    
    // 5. Tag Filter Handler (NEW)
    $(document).on('click', '.tag-filter-link', function(e) {
        e.preventDefault();
        var newTagSlug = $(this).data('tag-slug');
        var filters = getCurrentFilters();

        // Toggle logic: If clicking the current filter, clear it.
        if (newTagSlug === filters.tag_slug) newTagSlug = '';

        fetchPosts(filters.q, 1, filters.cat_id, newTagSlug);
    });

    // 6. Clear Tag Filter Handler (NEW)
    $(document).on('click', '#clear-tag-filter', function(e) {
        e.preventDefault();
        var filters = getCurrentFilters();
        fetchPosts(filters.q, 1, filters.cat_id, '');
    });
});
</script>

</body>
</html>