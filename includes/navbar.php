<?php
require_once __DIR__ . '/i18n.php';
$lang = bth_current_lang();
$base = bth_base_path($lang);
global $BTH_T;
$t = $BTH_T[$lang];

// Calculate Language Switch URLs dynamically based on current request
$request_uri = $_SERVER['REQUEST_URI'];
$root = bth_root_url();
$uri_path = parse_url($request_uri, PHP_URL_PATH);
$query = parse_url($request_uri, PHP_URL_QUERY);
$relative_path = substr($uri_path, strlen($root));

if ($lang === 'id') {
    // Current is ID, switch to EN
    // Remove /id prefix from path
    $new_path = preg_replace('#^/id#', '', $relative_path);
    if (empty($new_path)) $new_path = '/';
    $url_en = $root . $new_path . ($query ? '?' . $query : '');
    $url_id = $request_uri; // Current
} else {
    // Current is EN, switch to ID
    // Add /id prefix. Handle root path correctly.
    if ($relative_path === '/') {
        $new_path = '/id/';
    } else {
        $new_path = '/id' . $relative_path;
    }
    $url_id = $root . $new_path . ($query ? '?' . $query : '');
    $url_en = $request_uri; // Current
}

// Helper for menu links
if (!function_exists('get_page_url')) {
    function get_page_url($page, $lang)
    {
        $root = bth_root_url();
        if ($lang === 'id') {
            return $root . '/id/' . $page . '.php';
        }
        return $root . '/' . $page . '.php';
    }
}
?>
<nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center hover-scale">
                <a href="<?php echo $base; ?>" class="flex items-center">
                    <img src="<?php echo bth_root_url(); ?>/assets/images/Bali Tech Hub Black Tranparant Logo.webp"
                        alt="Bali Tech Hub Logo" class="h-10 w-auto">
                    <span class="ml-3 text-xl font-semibold text-custom-black">Bali Tech Hub</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="<?php echo $base; ?>"
                        class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300"><?php echo $t['home']; ?></a>
                    <a href="<?php echo get_page_url('about', $lang); ?>"
                        class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300"><?php echo $t['about']; ?></a>

                    <!-- Community Dropdown -->
                    <div class="relative group">
                        <button
                            class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300 flex items-center">
                            <?php echo $t['community']; ?>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left">
                            <div class="py-1" role="menu" aria-orientation="vertical">
                                <a href="<?php echo get_page_url('community', $lang); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem"><?php echo $t['community']; ?></a>
                                <a href="<?php echo get_page_url('partners', $lang); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem"><?php echo $t['partners']; ?></a>
                                <a href="<?php echo get_page_url('blog', $lang); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem"><?php echo $t['blog']; ?></a>
                                <a href="<?php echo get_page_url('faq', $lang); ?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">FAQ</a>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo get_page_url('contact', $lang); ?>"
                        class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300"><?php echo $t['contact']; ?></a>
                    <a href="<?php echo get_page_url('join', $lang); ?>"
                        class="bg-custom-black text-white hover:bg-gray-800 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg"><?php echo $t['join']; ?></a>

                    <!-- Language Switcher -->
                    <div class="flex items-center ml-4 pl-4 border-l border-gray-300">
                        <a href="<?php echo $url_en; ?>"
                            class="lang-switcher text-gray-600 hover:text-custom-black px-2 py-1 text-sm font-medium transition-colors duration-300 <?php echo $lang === 'en' ? 'text-custom-black font-semibold' : ''; ?>">EN</a>
                        <span class="mx-1 text-gray-400">|</span>
                        <a href="<?php echo $url_id; ?>"
                            class="lang-switcher text-gray-600 hover:text-custom-black px-2 py-1 text-sm font-medium transition-colors duration-300 <?php echo $lang === 'id' ? 'text-custom-black font-semibold' : ''; ?>">ID</a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-custom-black hover:text-gray-600 focus:outline-none p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="<?php echo $base; ?>"
                class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium"><?php echo $t['home']; ?></a>
            <a href="<?php echo get_page_url('about', $lang); ?>"
                class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium"><?php echo $t['about']; ?></a>
            <div class="space-y-1 pl-4 border-l-2 border-gray-100 ml-2">
                <a href="<?php echo get_page_url('community', $lang); ?>"
                    class="text-gray-600 hover:text-custom-black block px-3 py-2 text-base font-medium"><?php echo $t['community']; ?></a>
                <a href="<?php echo get_page_url('partners', $lang); ?>"
                    class="text-gray-600 hover:text-custom-black block px-3 py-2 text-base font-medium"><?php echo $t['partners']; ?></a>
                <a href="<?php echo get_page_url('blog', $lang); ?>"
                    class="text-gray-600 hover:text-custom-black block px-3 py-2 text-base font-medium"><?php echo $t['blog']; ?></a>
                <a href="<?php echo get_page_url('faq', $lang); ?>"
                    class="text-gray-600 hover:text-custom-black block px-3 py-2 text-base font-medium">FAQ</a>
            </div>
            <a href="<?php echo get_page_url('contact', $lang); ?>"
                class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium"><?php echo $t['contact']; ?></a>
            <a href="<?php echo get_page_url('join', $lang); ?>"
                class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium font-bold text-indigo-600"><?php echo $t['join']; ?></a>

            <!-- Mobile Language Switcher -->
            <div class="flex items-center justify-center px-3 py-2 border-t border-gray-200 mt-2 pt-2">
                <a href="<?php echo $url_en; ?>"
                    class="lang-switcher text-gray-600 hover:text-custom-black px-3 py-1 text-sm font-medium <?php echo $lang === 'en' ? 'text-custom-black font-semibold' : ''; ?>">EN</a>
                <span class="mx-2 text-gray-400">|</span>
                <a href="<?php echo $url_id; ?>"
                    class="lang-switcher text-gray-600 hover:text-custom-black px-3 py-1 text-sm font-medium <?php echo $lang === 'id' ? 'text-custom-black font-semibold' : ''; ?>">ID</a>
            </div>
        </div>
    </div>
</nav>

<!-- Structured Data for Navigation -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "<?php echo $t['home']; ?>",
            "item": "https://balitechhub.com<?php echo bth_base_path($lang); ?>"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "<?php echo $t['about']; ?>",
            "item": "https://balitechhub.com/<?php echo get_page_url('about', $lang); ?>"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "<?php echo $t['community']; ?>",
            "item": "https://balitechhub.com/<?php echo get_page_url('community', $lang); ?>"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": "<?php echo $t['partners']; ?>",
            "item": "https://balitechhub.com/<?php echo get_page_url('partners', $lang); ?>"
        },
        {
            "@type": "ListItem",
            "position": 5,
            "name": "<?php echo $t['blog']; ?>",
            "item": "https://balitechhub.com/<?php echo get_page_url('blog', $lang); ?>"
        },
        {
            "@type": "ListItem",
            "position": 6,
            "name": "FAQ",
            "item": "https://balitechhub.com/<?php echo get_page_url('faq', $lang); ?>"
        },
        {
            "@type": "ListItem",
            "position": 7,
            "name": "<?php echo $t['contact']; ?>",
            "item": "https://balitechhub.com/<?php echo get_page_url('contact', $lang); ?>"
        }
    ]
}
</script>