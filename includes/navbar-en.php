<nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center hover-scale">
                <a href="/" class="flex items-center">
                    <img src="/assets/images/Bali Tech Hub Black Tranparant Logo.webp" alt="Bali Tech Hub Logo" class="h-10 w-auto">
                    <span class="ml-3 text-xl font-semibold text-custom-black">Bali Tech Hub</span>
                </a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="#home" class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Home</a>
                    <a href="#about" class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300">About</a>
                    <a href="#community" class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Community</a>
                    <a href="#contact" class="text-custom-black hover:text-gray-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Contact</a>
                    
                    <!-- Language Switcher -->
                    <div class="flex items-center ml-4 pl-4 border-l border-gray-300">
                        <a href="/" class="text-custom-black font-semibold px-2 py-1 text-sm transition-colors duration-300">EN</a>
                        <span class="mx-1 text-gray-400">|</span>
                        <a href="/id/" class="text-gray-600 hover:text-custom-black px-2 py-1 text-sm font-medium transition-colors duration-300">ID</a>
                    </div>
                </div>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-custom-black hover:text-gray-600 focus:outline-none p-2">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#home" class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium">Home</a>
            <a href="#about" class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium">About</a>
            <a href="#community" class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium">Community</a>
            <a href="#contact" class="text-custom-black hover:text-gray-600 block px-3 py-2 text-base font-medium">Contact</a>
            
            <!-- Mobile Language Switcher -->
            <div class="flex items-center justify-center px-3 py-2 border-t border-gray-200 mt-2 pt-2">
                <a href="/" class="text-custom-black font-semibold px-3 py-1 text-sm">EN</a>
                <span class="mx-2 text-gray-400">|</span>
                <a href="/id/" class="text-gray-600 hover:text-custom-black px-3 py-1 text-sm font-medium">ID</a>
            </div>
        </div>
    </div>
</nav>
