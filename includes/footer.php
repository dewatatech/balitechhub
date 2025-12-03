<?php
require_once __DIR__ . '/i18n.php';
$lang = bth_current_lang();
global $BTH_T;
$t = $BTH_T[$lang];
?>
<footer class="bg-custom-black text-white mt-0">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <div class="flex items-center">
                    <img src="/assets/images/Bali Tech Hub White Tranparant Logo.webp" alt="Bali Tech Hub Logo"
                        class="h-12 w-auto">
                    <span class="ml-3 text-xl font-bold">Bali Tech Hub</span>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed max-w-sm">
                    The largest technology community in Bali, connecting developers, designers, and tech enthusiasts.
                </p>
                <!-- Social Icons -->
                <div class="flex space-x-4">
                    <a href="https://instagram.com/balitechhub.id/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://discord.gg/85NvstR9ez" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z" />
                        </svg>
                    </a>
                    <a href="https://x.com/balitechhub" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/balitechhub" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 c0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="index.php" class="text-gray-300 hover:text-white transition-colors duration-300">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="about.php" class="text-gray-300 hover:text-white transition-colors duration-300">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="community.php" class="text-gray-300 hover:text-white transition-colors duration-300">
                            Community
                        </a>
                    </li>
                    <li>
                        <a href="partners.php" class="text-gray-300 hover:text-white transition-colors duration-300">
                            Our Partners
                        </a>
                    </li>
                    <li>
                        <a href="faq.php" class="text-gray-300 hover:text-white transition-colors duration-300">
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:contact@balitechhub.com"
                            class="text-gray-300 hover:text-white transition-colors duration-300">
                            contact@balitechhub.com
                        </a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-300">Bali, Indonesia</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-300">Mon-Fri: 9AM-9PM</span>
                    </div>
                </div>
            </div>

            <!-- Community -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold mb-4"><?php echo $t['community']; ?></h3>
                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="<?php echo get_page_url('volunteer', $lang); ?>"
                            class="text-gray-300 hover:text-white transition-colors duration-300">
                            <?php echo $t['volunteer']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_url('code-of-conduct', $lang); ?>"
                            class="text-gray-300 hover:text-white transition-colors duration-300">
                            <?php echo $t['code_of_conduct']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_url('join', $lang); ?>"
                            class="text-gray-300 hover:text-white transition-colors duration-300">
                            <?php echo $t['join']; ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Supported By -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold mb-4">Supported By</h3>
                <div class="space-y-2 text-sm">
                    <div class="text-gray-300 hover:text-white transition-colors duration-300">
                        <a href="partners.php" class="hover:underline">Bali Alpha</a>
                    </div>
                    <div class="text-gray-300 hover:text-white transition-colors duration-300">
                        <a href="partners.php" class="hover:underline">Bali Domains</a>
                    </div>
                    <div class="text-gray-300 hover:text-white transition-colors duration-300">
                        <a href="partners.php" class="hover:underline">Dewata Solutions</a>
                    </div>
                    <div class="text-gray-300 hover:text-white transition-colors duration-300">
                        <a href="partners.php" class="hover:underline">Dewata Tech</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800 bg-black/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                <p class="text-sm text-gray-400">
                    <?php echo $t['copyright']; ?>
                </p>
                <div class="flex items-center space-x-6 text-sm">
                    <a href="<?php echo get_page_url('privacy', $lang); ?>"
                        class="text-gray-400 hover:text-white transition-colors duration-300"><?php echo $t['privacy']; ?></a>
                    <a href="<?php echo get_page_url('terms', $lang); ?>"
                        class="text-gray-400 hover:text-white transition-colors duration-300"><?php echo $t['terms']; ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>