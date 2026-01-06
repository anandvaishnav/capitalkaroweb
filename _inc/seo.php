<?php
// _inc/seo.php
// Universal SEO module for Capital Karo project
// Place this file inside your <head> via: <?php include '_inc/seo.php'
// Requires: PDO $conn (from _data/db.php) and optional config vars from _data/data.php
// Safe: uses fallbacks if variables missing.

if (headers_sent()) {
    // if headers already sent, bail out to avoid broken head content
    return;
}

// Basic site info (try common variables from your _data/data.php)
$site_name = $site_name ?? ($GLOBALS['site_name'] ?? 'Website');
$site_base = $site_url ?? ($GLOBALS['site_url'] ?? null);

// build base_url from server if not provided
if (empty($site_base)) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $site_base = $protocol . '://' . $_SERVER['HTTP_HOST'];
}

// current request info
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$parsed = parse_url($request_uri);
$path = $parsed['path'] ?? '/';
$query = $parsed['query'] ?? '';
// remove trailing slash
$path_norm = rtrim($path, '/');

// helper: make absolute url
function abs_url($path_rel) {
    global $site_base;
    if (empty($path_rel)) return $site_base;
    // if already absolute
    if (preg_match('#^https?://#i', $path_rel)) return $path_rel;
    // ensure leading slash
    if ($path_rel[0] !== '/') $path_rel = '/' . ltrim($path_rel, '/');
    return rtrim($site_base, '/') . $path_rel;
}

// helper: safe escape
function esc($str) {
    return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
}

// default image
$default_image = abs_url('/assets/images/default-post.jpg');

// defaults
$title = $site_name;
$meta_description = "$site_name — informative articles and guides.";
$canonical = abs_url($path);
$og_type = 'website';
$og_image = $default_image;
$twitter_card = 'summary_large_image';
$jsonld_scripts = [];

// Pagination detection (for lists)
$page_num = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

// detect page type by path patterns:
// - single post: /blog/{slug}  (your current blog-details uses this pattern)
// - blog listing: /blog or /blog?*
// - blog-grid: /blog-grid
// - category: /category/{slug}
// Adjust patterns if your routing differs.

$is_single = false;
$is_blog_listing = false;
$is_blog_grid = false;
$is_category = false;
$category_slug = '';
$post_slug = '';

if (preg_match('#^/blog/([^/]+)$#', $path_norm, $m)) {
    $is_single = true;
    $post_slug = $m[1];
} elseif ($path_norm === '/blog' || $path_norm === '/blog/') {
    $is_blog_listing = true;
} elseif ($path_norm === '/blog-grid' || $path_norm === '/blog-grid/') {
    $is_blog_grid = true;
} elseif (preg_match('#^/category/([^/]+)$#', $path_norm, $m2)) {
    $is_category = true;
    $category_slug = $m2[1];
} elseif ($path_norm === '/' || $path_norm === '/index' || $path_norm === '/index.php') {
    // homepage
    $is_home = true;
} else {
    $is_home = false;
}

// ---------- SINGLE POST: fetch DB row by slug & build Article JSON-LD ----------
if ($is_single) {
    try {
        if (!isset($conn)) {
            // try to get global $conn
            $conn = $GLOBALS['conn'] ?? null;
        }
        if ($conn instanceof PDO) {
            // fetch post by slug
            $stmt = $conn->prepare("SELECT p.*, c.name AS category_name FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.slug = ? AND p.status = 'published' LIMIT 1");
            $stmt->execute([rawurldecode($post_slug)]);
            $post = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $post = false;
        }
    } catch (Exception $e) {
        $post = false;
    }

    if ($post) {
        // set meta values from DB
        $title = trim($post['title'] ?: $title);
        $meta_description = trim($post['meta_description'] ?: trim(substr(strip_tags($post['content'] ?? ''), 0, 160)));
        $canonical = abs_url('/blog/' . rawurlencode($post['slug']));
        $og_type = 'article';
        $og_image = !empty($post['featured_image']) ? abs_url('/blog-admin-capitalkaro/uploads/' . ltrim($post['featured_image'], '/')) : $default_image;
        $twitter_card = 'summary_large_image';

        // Article JSON-LD
        $datePublished = !empty($post['created_at']) ? date(DATE_ISO8601, strtotime($post['created_at'])) : date(DATE_ISO8601);
        $dateModified  = !empty($post['updated_at']) ? date(DATE_ISO8601, strtotime($post['updated_at'])) : $datePublished;
        $authorName = !empty($post['author_name']) ? $post['author_name'] : 'Admin';
        $articleLd = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $canonical
            ],
            'headline' => $post['title'],
            'image' => [$og_image],
            'datePublished' => $datePublished,
            'dateModified' => $dateModified,
            'author' => [
                '@type' => 'Person',
                'name' => $authorName
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => $site_name,
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => abs_url('/assets/images/logo.png')
                ]
            ],
            'description' => mb_substr(trim(strip_tags($post['meta_description'] ?: $post['content'] ?? '')), 0, 300)
        ];
        if (!empty($post['category_name'])) {
            $articleLd['articleSection'] = $post['category_name'];
        }
        $jsonld_scripts[] = $articleLd;

        // build breadcrumb list (Home -> Blog -> Category? -> Post)
        $breadcrumb = [];
        $pos = 1;
        $breadcrumb[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => 'Home',
            'item' => abs_url('/')
        ];
        $breadcrumb[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => 'Blog',
            'item' => abs_url('/blog')
        ];
        if (!empty($post['category_name'])) {
            $cat_slug_guess = rawurlencode(strtolower(str_replace(' ', '-', $post['category_name'])));
            $breadcrumb[] = [
                '@type' => 'ListItem',
                'position' => $pos++,
                'name' => $post['category_name'],
                'item' => abs_url('/category/' . $cat_slug_guess)
            ];
        }
        $breadcrumb[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $post['title'],
            'item' => $canonical
        ];
        $jsonld_scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumb
        ];
    } else {
        // if slug exists in URL but DB not found, fallback to basic
        $title = "$site_name | Blog";
        $meta_description = "$site_name blog articles.";
        $canonical = abs_url($path);
    }
}

// ---------- CATEGORY PAGE ----------
if ($is_category) {
    try {
        if (!isset($conn)) {
            $conn = $GLOBALS['conn'] ?? null;
        }
        if ($conn instanceof PDO) {
            $catStmt = $conn->prepare("SELECT * FROM categories WHERE LOWER(REPLACE(name,' ','-')) = LOWER(?) LIMIT 1");
            $catStmt->execute([$category_slug]);
            $categoryRow = $catStmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $categoryRow = false;
        }
    } catch (Exception $e) {
        $categoryRow = false;
    }

    if ($categoryRow) {
        $title = $categoryRow['name'] . " | " . $site_name;
        $meta_description = "Read " . $categoryRow['name'] . " articles on $site_name. Browse expert guides and latest updates.";
        $canonical = abs_url('/category/' . $category_slug);
        $og_image = $default_image;
        // breadcrumb JSON-LD: Home -> Blog -> Category
        $jsonld_scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>abs_url('/')],
                ['@type'=>'ListItem','position'=>2,'name'=>'Blog','item'=>abs_url('/blog')],
                ['@type'=>'ListItem','position'=>3,'name'=>$categoryRow['name'],'item'=>abs_url('/category/' . $category_slug)],
            ]
        ];
        // CollectionPage for category
        $jsonld_scripts[] = [
            '@context'=>'https://schema.org',
            '@type'=>'CollectionPage',
            'name' => $categoryRow['name'] . ' - ' . $site_name,
            'description' => $meta_description,
            'url' => $canonical
        ];
    } else {
        // fallback
        $meta_description = "$site_name blog category.";
        $canonical = abs_url($path);
    }
}

// ---------- BLOG LISTING / GRID ----------
if ($is_blog_listing || $is_blog_grid) {
    $title = ($is_blog_grid ? 'Blog Grid' : 'Blog') . " | " . $site_name;
    $meta_description = "Explore the latest articles and guides on $site_name.";
    $canonical = abs_url($path_norm === '' ? '/' : $path_norm);
    $og_image = $default_image;

    // BreadcrumbList JSON-LD (Home -> Blog)
    $jsonld_scripts[] = [
        '@context'=>'https://schema.org',
        '@type'=>'BreadcrumbList',
        'itemListElement'=> [
            ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>abs_url('/')],
            ['@type'=>'ListItem','position'=>2,'name'=>($is_blog_grid ? 'Blog Grid' : 'Blog'),'item'=>abs_url($path_norm)]
        ]
    ];

    // CollectionPage JSON-LD
    $jsonld_scripts[] = [
        '@context'=>'https://schema.org',
        '@type'=>'CollectionPage',
        'name' => ($is_blog_grid ? 'Blog Grid' : 'Blog') . ' - ' . $site_name,
        'description' => $meta_description,
        'url' => $canonical
    ];
}

// ---------- HOMEPAGE ----------
if ($is_home) {
    $title = $site_name . " — Home";
    $meta_description = $site_name . " — Financial services, loans, and guides.";
    $canonical = abs_url('/');
    // WebSite JSON-LD
    $jsonld_scripts[] = [
        '@context'=>'https://schema.org',
        '@type'=>'WebSite',
        'name'=>$site_name,
        'url'=>abs_url('/'),
        'potentialAction'=> [
            '@type'=>'SearchAction',
            'target'=>abs_url('/search?q={search_term_string}'),
            'query-input'=>'required name=search_term_string'
        ]
    ];
}

// ---------- Generic fallback if nothing matched ----------
if (empty($title)) $title = $site_name;
if (empty($meta_description)) $meta_description = "$site_name — articles and updates.";
if (empty($canonical)) $canonical = abs_url($path);

// ---------- Output meta tags (print inside <head>) ----------
echo "<!-- UNIVERSAL SEO MODULE -->\n";
echo "<title>" . esc($title) . "</title>\n";
echo '<meta name="description" content="' . esc($meta_description) . '">' . "\n";
echo '<link rel="canonical" href="' . esc($canonical) . '">' . "\n";

// OpenGraph + Twitter
echo '<meta property="og:site_name" content="' . esc($site_name) . '">' . "\n";
echo '<meta property="og:title" content="' . esc($title) . '">' . "\n";
echo '<meta property="og:description" content="' . esc($meta_description) . '">' . "\n";
echo '<meta property="og:type" content="' . esc($og_type) . '">' . "\n";
echo '<meta property="og:url" content="' . esc($canonical) . '">' . "\n";
echo '<meta property="og:image" content="' . esc($og_image) . '">' . "\n";

echo '<meta name="twitter:card" content="' . esc($twitter_card) . '">' . "\n";
echo '<meta name="twitter:title" content="' . esc($title) . '">' . "\n";
echo '<meta name="twitter:description" content="' . esc($meta_description) . '">' . "\n";
echo '<meta name="twitter:image" content="' . esc($og_image) . '">' . "\n";

// Pagination links for list pages
if ($is_blog_listing || $is_blog_grid || $is_category) {
    if ($page_num > 1) {
        echo '<link rel="prev" href="' . esc($canonical . ($page_num > 2 ? '?page=' . ($page_num - 1) : '')) . '">' . "\n";
    }
    if (isset($totalPages) && $page_num < $totalPages) {
        echo '<link rel="next" href="' . esc($canonical . '?page=' . ($page_num + 1)) . '">' . "\n";
    }
}

// Print JSON-LD scripts
foreach ($jsonld_scripts as $j) {
    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($j, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "\n";
    echo '</script>' . "\n";
}

echo "<!-- /UNIVERSAL SEO MODULE -->\n";

?>