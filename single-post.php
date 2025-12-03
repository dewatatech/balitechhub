<?php
// single-post.php

// Get slug from URL
// We expect the slug to be passed via query parameter from .htaccess rewrite
// RewriteRule ^blog/([^/]+)/?$ single-post.php?slug=$1 [L,QSA]
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (empty($slug)) {
    // Redirect to blog home if no slug
    header("Location: /blog");
    exit;
}

// API Endpoint
$api_url = "https://blog.balitechhub.com/wp-json/wp/v2/posts?slug=" . urlencode($slug) . "&_embed";

// Fetch data using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'BaliTechHub/1.0');
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$posts = ($response !== false && $http_code === 200) ? json_decode($response, true) : [];

// Check if post exists
if (empty($posts) || !isset($posts[0])) {
    // 404 Not Found
    http_response_code(404);
    include '404.php';
    exit;
}

$post = $posts[0];

// Extract data
$title = $post['title']['rendered'];
$content = $post['content']['rendered'];
$date = date('F d, Y', strtotime($post['date']));
$featured_img = isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])
    ? $post['_embedded']['wp:featuredmedia'][0]['source_url']
    : '';

// SEO Metadata (Basic)
$excerpt = strip_tags($post['excerpt']['rendered']);
$meta_desc = substr($excerpt, 0, 160);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Bali Tech Hub</title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta property="og:type" content="article">
    <!-- Tailwind CSS with Typography Plugin -->
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-black': '#000000',
                        'custom-white': '#ffffff',
                        'custom-gray': '#f8f9fa'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    },
                    typography: {
                        DEFAULT: {
                            css: {
                                maxWidth: '100%',
                                color: '#374151',
                                a: {
                                    color: '#2563EB',
                                    '&:hover': {
                                        color: '#1D4ED8',
                                    },
                                },
                                h1: {
                                    color: '#111827',
                                    fontWeight: '700',
                                },
                                h2: {
                                    color: '#111827',
                                    fontWeight: '600',
                                    marginTop: '2em',
                                    marginBottom: '1em',
                                },
                                h3: {
                                    color: '#111827',
                                    fontWeight: '600',
                                    marginTop: '1.5em',
                                    marginBottom: '0.75em',
                                },
                                'ul > li::marker': {
                                    color: '#6B7280',
                                },
                                blockquote: {
                                    borderLeftColor: '#E5E7EB',
                                    color: '#4B5563',
                                },
                            },
                        },
                    },
                }
            }
        }
    </script>

    <link rel="stylesheet" href="/styles.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>

<body class="bg-custom-white text-custom-black font-sans smooth-scroll">
    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <!-- Article Header -->
    <header class="pt-32 pb-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-center">
        <div class="text-sm text-gray-500 mb-4 font-medium uppercase tracking-wider"><?php echo $date; ?></div>
        <h1 class="text-3xl md:text-5xl font-bold mb-8 leading-tight text-gray-900"><?php echo $title; ?></h1>

        <?php if ($featured_img): ?>
            <div class="rounded-2xl overflow-hidden shadow-2xl mb-12 aspect-video relative">
                <img src="<?php echo $featured_img; ?>" alt="<?php echo $title; ?>"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
        <?php endif; ?>
    </header>

    <!-- Article Content -->
    <article class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        <div class="prose prose-lg prose-slate mx-auto">
            <?php echo $content; ?>
        </div>

        <!-- Share / Navigation -->
        <div class="mt-16 pt-8 border-t border-gray-200 flex justify-between items-center">
            <a href="/blog"
                class="inline-flex items-center text-gray-600 hover:text-custom-black transition-colors font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Blog
            </a>

            <div class="flex space-x-4">
                <!-- Social Share placeholders could go here -->
            </div>
        </div>
    </article>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="/script.js"></script>
</body>

</html>