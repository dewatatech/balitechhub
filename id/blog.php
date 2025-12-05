<?php
// id/blog.php

// Pagination
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$per_page = 9; // Number of posts per page

// Filter & Search Parameters
$search_query = isset($_GET['search']) ? trim($_GET['search']) : '';
$sort_option = isset($_GET['sort']) ? $_GET['sort'] : 'date_desc';

// Map sort options to WP API parameters
$orderby = 'date';
$order = 'desc';

switch ($sort_option) {
    case 'date_asc':
        $orderby = 'date';
        $order = 'asc';
        break;
    case 'title_asc':
        $orderby = 'title';
        $order = 'asc';
        break;
    case 'title_desc':
        $orderby = 'title';
        $order = 'desc';
        break;
    case 'date_desc':
    default:
        $orderby = 'date';
        $order = 'desc';
        break;
}

// Build API Endpoint
$api_url = "https://blog.balitechhub.com/wp-json/wp/v2/posts?per_page={$per_page}&page={$page}&orderby={$orderby}&order={$order}&_embed";

if (!empty($search_query)) {
    $api_url .= "&search=" . urlencode($search_query);
}

// Fetch data using cURL for better reliability
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1); // We need headers for pagination
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'BaliTechHub/1.0');

$output = curl_exec($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header_text = substr($output, 0, $header_size);
$body = substr($output, $header_size);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$posts = [];
$total_pages = 0;

if ($output !== false && $http_code === 200) {
    $posts = json_decode($body, true);

    // Parse headers for X-WP-TotalPages
    if (preg_match('/x-wp-totalpages: (\d+)/i', $header_text, $matches)) {
        $total_pages = (int) $matches[1];
    }
}

// If API fails or returns error (like 400 for page out of range), handle gracefully
if (!is_array($posts) || isset($posts['code'])) {
    $posts = [];
    $total_pages = 0;
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Bali Tech Hub</title>
    <meta name="description" content="Berita terbaru, wawasan, dan pembaruan dari komunitas Bali Tech Hub.">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
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
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body class="bg-custom-gray text-custom-black font-sans smooth-scroll">
    <?php include __DIR__ . '/../includes/navbar.php'; ?>

    <!-- Header Section -->
    <section class="bg-custom-black text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div
                class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIvPjwvc3ZnPg==')]">
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 fade-in">Blog Kami</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto fade-in">
                Wawasan, pembaruan, dan cerita dari komunitas Bali Tech Hub.
            </p>
        </div>
    </section>

    <!-- Filter & Search Section -->
    <section class="py-10 border-b border-gray-200 bg-white sticky top-16 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <form action="" method="GET" class="flex flex-col md:flex-row gap-4 justify-between items-center">
                <!-- Search -->
                <div class="relative w-full md:w-1/3">
                    <input type="text" name="search" placeholder="Cari artikel..." value="<?php echo htmlspecialchars($search_query); ?>"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-custom-black focus:border-transparent">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Filters -->
                <div class="flex gap-4 w-full md:w-auto">
                    <select name="sort" onchange="this.form.submit()"
                        class="w-full md:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-custom-black">
                        <option value="date_desc" <?php echo $sort_option === 'date_desc' ? 'selected' : ''; ?>>Terbaru</option>
                        <option value="date_asc" <?php echo $sort_option === 'date_asc' ? 'selected' : ''; ?>>Terlama</option>
                        <option value="title_asc" <?php echo $sort_option === 'title_asc' ? 'selected' : ''; ?>>A-Z</option>
                        <option value="title_desc" <?php echo $sort_option === 'title_desc' ? 'selected' : ''; ?>>Z-A</option>
                    </select>
                    
                    <button type="submit" class="bg-custom-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                        Filter
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php if (empty($posts)): ?>
                <div class="text-center py-20">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700">Tidak ada artikel ditemukan.</h3>
                    <p class="text-gray-500 mt-2">Coba sesuaikan pencarian atau filter Anda.</p>
                    <a href="/id/blog.php" class="inline-block mt-4 text-blue-600 hover:underline">Hapus semua filter</a>
                </div>
            <?php else: ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($posts as $post): ?>
                        <?php
                        $featured_img = isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])
                            ? $post['_embedded']['wp:featuredmedia'][0]['source_url']
                            : 'https://via.placeholder.com/800x600?text=No+Image';
                        $date = date('d M Y', strtotime($post['date']));
                        $excerpt = strip_tags($post['excerpt']['rendered']);
                        $excerpt = strlen($excerpt) > 120 ? substr($excerpt, 0, 120) . '...' : $excerpt;
                        ?>
                        <article
                            class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover-lift flex flex-col h-full fade-in border border-gray-100">
                            <a href="/id/single-post.php?slug=<?php echo $post['slug']; ?>" class="block overflow-hidden h-48 relative group">
                                <img src="<?php echo $featured_img; ?>" alt="<?php echo $post['title']['rendered']; ?>"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            </a>
                            <div class="p-6 flex-1 flex flex-col">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <?php echo $date; ?>
                                </div>
                                <h2 class="text-xl font-bold mb-3 text-custom-black line-clamp-2">
                                    <a href="/id/single-post.php?slug=<?php echo $post['slug']; ?>" class="hover:text-blue-600 transition-colors">
                                        <?php echo $post['title']['rendered']; ?>
                                    </a>
                                </h2>
                                <p class="text-gray-600 mb-4 flex-1 line-clamp-3">
                                    <?php echo $excerpt; ?>
                                </p>
                                <a href="/id/single-post.php?slug=<?php echo $post['slug']; ?>"
                                    class="inline-flex items-center text-custom-black font-semibold hover:text-blue-600 transition-colors text-sm mt-auto">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                    <div class="mt-16 flex justify-center space-x-2">
                        <?php if ($page > 1): ?>
                            <a href="?page=<?php echo ($page - 1); ?>&search=<?php echo urlencode($search_query); ?>&sort=<?php echo $sort_option; ?>"
                                class="px-4 py-2 bg-white border border-gray-200 rounded-lg hover:bg-custom-black hover:text-white transition-colors">
                                Sebelumnya
                            </a>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <?php if ($i == $page): ?>
                                <span class="px-4 py-2 bg-custom-black text-white rounded-lg border border-custom-black">
                                    <?php echo $i; ?>
                                </span>
                            <?php else: ?>
                                <a href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search_query); ?>&sort=<?php echo $sort_option; ?>"
                                    class="px-4 py-2 bg-white border border-gray-200 rounded-lg hover:bg-custom-black hover:text-white transition-colors">
                                    <?php echo $i; ?>
                                </a>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($page < $total_pages): ?>
                            <a href="?page=<?php echo ($page + 1); ?>&search=<?php echo urlencode($search_query); ?>&sort=<?php echo $sort_option; ?>"
                                class="px-4 py-2 bg-white border border-gray-200 rounded-lg hover:bg-custom-black hover:text-white transition-colors">
                                Selanjutnya
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script src="../script.js"></script>
</body>

</html>