<?php
include_once '_data/data.php';
include_once '_data/db.php';

/* ----------------------------------------------------
    GET SLUG
---------------------------------------------------- */
$url = $_SERVER['REQUEST_URI'];
$parts = explode('/', trim($url, '/'));
$slug = end($parts);

if (!$slug || $slug == 'blog-details') {
    die("<h2>Invalid blog URL</h2>");
}

/* ----------------------------------------------------
    FETCH POST
---------------------------------------------------- */
$stmt = $conn->prepare("
    SELECT p.*, c.name AS category_name 
    FROM posts p
    LEFT JOIN categories c ON p.category_id = c.id
    WHERE p.slug = ? AND p.status = 'published'
    LIMIT 1
");
$stmt->execute([$slug]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    include '404.php';
    exit;
}

/* ----------------------------------------------------
    UPDATE VIEWS
---------------------------------------------------- */
$conn->prepare("UPDATE posts SET views = views + 1 WHERE id = ?")
      ->execute([$post['id']]);

/* ----------------------------------------------------
    PREV / NEXT
---------------------------------------------------- */
$prevStmt = $conn->prepare("
    SELECT title, slug FROM posts 
    WHERE id < ? AND status='published'
    ORDER BY id DESC LIMIT 1
");
$prevStmt->execute([$post['id']]);
$prev = $prevStmt->fetch(PDO::FETCH_ASSOC);

$nextStmt = $conn->prepare("
    SELECT title, slug FROM posts 
    WHERE id > ? AND status='published'
    ORDER BY id ASC LIMIT 1
");
$nextStmt->execute([$post['id']]);
$next = $nextStmt->fetch(PDO::FETCH_ASSOC);

/* ----------------------------------------------------
    RECENT POSTS
---------------------------------------------------- */
$recentStmt = $conn->query("
    SELECT title, slug, featured_image, created_at 
    FROM posts
    WHERE status='published'
    ORDER BY id DESC LIMIT 4
");
$recentPosts = $recentStmt->fetchAll(PDO::FETCH_ASSOC);

/* ----------------------------------------------------
    CATEGORIES
---------------------------------------------------- */
$catStmt = $conn->query("
    SELECT c.id, c.name, COUNT(p.id) AS total_posts
    FROM categories c
    LEFT JOIN posts p ON p.category_id = c.id AND p.status='published'
    GROUP BY c.id
    ORDER BY c.name ASC
");
$categoriesList = $catStmt->fetchAll(PDO::FETCH_ASSOC);

/* ----------------------------------------------------
    POST TAGS (NEW: Tags specific to this post)
---------------------------------------------------- */
$tagStmt = $conn->prepare("
    SELECT t.name, t.slug 
    FROM tags t
    JOIN post_tags pt ON t.id = pt.tag_id
    WHERE pt.post_id = ?
    ORDER BY t.name ASC
");
$tagStmt->execute([$post['id']]);
$postTags = $tagStmt->fetchAll(PDO::FETCH_ASSOC);

/* ----------------------------------------------------
    POPULAR TAGS (NEW: For Sidebar)
---------------------------------------------------- */
$popularTagsStmt = $conn->query("
    SELECT t.name, t.slug, COUNT(pt.post_id) AS total_posts 
    FROM tags t 
    JOIN post_tags pt ON t.id = pt.tag_id 
    JOIN posts p ON pt.post_id = p.id AND p.status = 'published'
    GROUP BY t.id
    ORDER BY total_posts DESC 
    LIMIT 15
");
$popularTagsList = $popularTagsStmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '_inc/seo.php'; ?>
    <?php include '_inc/skin.php'; ?>
    <style>
        /* === NEW CSS FOR TAGS AND RECENT NEWS FIX === */
        
        /* Post Tags Styling */
        .single-post-tags { 
            margin-top: 20px;
            padding: 15px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .single-post-tags span { 
            font-weight: bold;
            margin-right: 15px;
            color: #333;
            flex-shrink: 0;
        }
        .tag-list-inline {
            display: flex;
            flex-wrap: wrap;
        }
        .tag-list-inline a {
            display: inline-block;
            background: #f1f1f1;
            padding: 5px 10px;
            margin: 5px 5px 5px 0;
            border-radius: 4px;
            text-decoration: none;
            color: #555;
            transition: background 0.3s;
        }
        .tag-list-inline a:hover {
            background: #ff5722;
            color: #fff;
        }
        
        /* Sidebar Tags Widget Styling */
        .tag-widget {
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 8px;
            margin-top: 30px; 
        }
        .tag-widget .tag-list-sidebar {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        .tag-widget .tag-list-sidebar li {
            background: #f8f8f8;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 1;
        }
        .tag-widget .tag-list-sidebar li a {
            color: #494949;
            text-decoration: none;
        }

        /* RECENT NEWS OVERFLOW FIX */
        .recent-blog-widget-item { 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            margin-bottom: 15px; 
        }
        .recent-blog-widget-item img { 
            width: 75px; 
            height: 75px; 
            object-fit: cover; 
            border-radius: 8px; 
            flex-shrink: 0;
        }
        .recent-blog-widget-item-title {
            flex-grow: 1; 
            min-width: 0; /* Ensures content respects container width */
        }
        .recent-blog-widget-item-title a {
            /* Truncate the title with ellipsis */
            display: block; 
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis; 
            max-width: 100%; 
        }
        /* ==================================== */
    </style>
</head>

<body class="custom-cursor">

<?php include '_inc/pre-loader.php'; ?>
<?php include '_inc/header.php'; ?>

<div class="inner-page-hero" style="background-image: url(assets/images/background/blog-hero-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 m-auto">
                <div class="hero-heading-title">
                    <h2><?= $post['title'] ?></h2>
                </div>
                <ul class="bradcrumb">
                    <li><a href="/index">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><?= $post['title'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="blog-list-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <div class="blog-block">
                    <div class="single-blog-image">
                        <img src="../../blog-admin-capitalkaro/uploads/<?= $post['featured_image'] ?>" 
                             alt="<?= $post['title'] ?>">
                    </div>
                    <div class="blog-item-meta">
                        <p>By <?= htmlspecialchars($post['author']) ?></p>
                        <p><?= date("d M Y", strtotime($post['created_at'])) ?></p>
                    </div>
                </div>

                <div class="blog-block">
                    <div class="single-blog-details">
                        <?= $post['content'] ?>
                    </div>
                </div>

                <?php if (!empty($postTags)): ?>
                <div class="blog-block">
                    <div class="single-post-tags">
                        <span>Tags:</span>
                        <div class="tag-list-inline">
                            <?php foreach ($postTags as $tag): ?>
                                <a href="/blog?tag=<?= urlencode($tag['slug']) ?>">
                                    <?= htmlspecialchars($tag['name']) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="blog-block">
                    <div class="single-blog-pagination">

                        <?php if ($prev): ?>
                        <div class="single-blog-pagination-pre">
                            <a href="/blog/<?= $prev['slug'] ?>" class="btn-link-two">
                                <i class="fa-solid fa-arrow-left"></i>
                            </a>
                            <h5>
                                <a href="/blog/<?= $prev['slug'] ?>"><?= $prev['title'] ?></a>
                            </h5>
                        </div>
                        <?php endif; ?>

                        <?php if ($next): ?>
                        <div class="single-blog-pagination-next">
                            <h5>
                                <a href="/blog/<?= $next['slug'] ?>"><?= $next['title'] ?></a>
                            </h5>
                            <a href="/blog/<?= $next['slug'] ?>" class="btn-link-two">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar stcky">

                    <div class="blog-block">
                        <div class="blog-serch-widget">
                            <form action="/blog" method="GET"> 
                                <input type="search" name="q" placeholder="Search posts...">
                                <button type="submit"><i class="flaticon-search-interface-symbol"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="blog-block">
                        <div class="category-widget">
                            <h4>Categories</h4>
                            <ul>
                                <?php foreach ($categoriesList as $cat): ?>
                                <li>
                                    <a href="/blog?cat_id=<?= $cat['id'] ?>"> 
                                        <?= $cat['name'] ?>
                                    </a>
                                    <span>(<?= $cat['total_posts'] ?>)</span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="blog-block">
                        <div class="recent-blog-widget">
                            <h4>Recent News</h4>

                            <?php foreach ($recentPosts as $r): ?>
                            <div class="recent-blog-widget-item">
                                <img src="../../blog-admin-capitalkaro/uploads/<?= $r['featured_image'] ?>" 
                                     alt="<?= $r['title'] ?>">
                                <div class="recent-blog-widget-item-title">
                                    <span><?= date("M d, Y", strtotime($r['created_at'])) ?></span>
                                    <a href="/blog-details/<?= $r['slug'] ?>"><?= $r['title'] ?></a>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                    <?php if (!empty($popularTagsList)): ?>
                        <div class="blog-block">
                            <div class="tag-widget">
                                <h4>Popular Tags</h4>
                                <ul class="tag-list-sidebar">
                                    <?php foreach ($popularTagsList as $tag): ?>
                                        <li>
                                            <a href="/blog?tag=<?= urlencode($tag['slug']) ?>">
                                                <?= htmlspecialchars($tag['name']) ?> (<?= $tag['total_posts'] ?>)
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
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

</body>
</html>