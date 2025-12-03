<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Bali Tech Hub</title>
    <meta name="description" content="Halaman yang Anda cari tidak ada. Kembali ke halaman utama Bali Tech Hub - komunitas teknologi yang berkembang pesat">
    <meta name="robots" content="noindex, nofollow">
    <meta name="language" content="Indonesian">
    <meta name="geo.region" content="ID-BA">
    <meta name="geo.placename" content="Bali">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://balitechhub.com/id/404/">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="404 - Halaman Tidak Ditemukan | Bali Tech Hub">
    <meta property="og:description" content="Halaman yang Anda cari tidak ada. Kembali ke halaman utama Bali Tech Hub.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://balitechhub.com/id/404/">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Bali Tech Hub">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon-96x96.png">
    <link rel="icon" type="image/svg+xml" href="../favicon.svg">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-black': '#000000',
                        'custom-white': '#ffffff',
                        'custom-gray': '#f8f9fa'
                    }
                }
            }
        }
    </script>
    
    <!-- Inline CSS for animations -->
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        .fade-in-scale {
            animation: fadeInScale 1s ease-in;
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInScale {
            from { 
                opacity: 0; 
                transform: scale(0.8); 
            }
            to { 
                opacity: 1; 
                transform: scale(1); 
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-white min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-transparent to-gray-200"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-black/5 rounded-full animate-pulse float-animation"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-black/5 rounded-full animate-pulse delay-1000 float-animation"></div>
    <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-black/5 rounded-full animate-pulse delay-2000 float-animation"></div>
    
    <div class="text-center relative z-10 max-w-2xl mx-auto px-4">
        <!-- Logo -->
        <div class="mb-8 fade-in">
            <img src="/assets/images/Bali Tech Hub Black Tranparant Logo.webp" alt="Bali Tech Hub Logo" class="h-20 w-auto mx-auto mb-6 fade-in-scale" onerror="this.style.display='none'">
            <h1 class="text-8xl md:text-9xl font-bold text-black mb-4 opacity-20 fade-in">404</h1>
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-4 fade-in">Halaman Tidak Ditemukan</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto leading-relaxed fade-in">
                Ups! Halaman yang Anda cari tidak ada atau telah dipindahkan. Mari kembali ke komunitas teknologi terbaik kami!
            </p>
        </div>
        
        <!-- Action Buttons -->
        <div class="space-y-4 mb-8 fade-in">
            <a href="/id/" class="inline-block bg-black text-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-800 transition-all duration-300 hover-lift shadow-lg">
                Kembali ke Beranda
            </a>
            <div class="block md:hidden"></div>
            <a href="/id/#about" class="inline-block bg-white text-black border-2 border-black px-8 py-4 rounded-lg font-semibold hover:bg-black hover:text-white transition-all duration-300 hover-lift shadow-lg">
                Tentang Kami
            </a>
            <div class="block md:hidden"></div>
            <a href="/" class="inline-block bg-gray-100 text-gray-700 border-2 border-gray-300 px-8 py-4 rounded-lg font-semibold hover:bg-gray-200 transition-all duration-300 hover-lift shadow-lg">
                English Version
            </a>
        </div>
        
        <!-- Community Links -->
        <div class="bg-white/50 backdrop-blur-sm rounded-xl p-6 shadow-lg fade-in">
            <h3 class="text-lg font-semibold text-black mb-4">Bergabung dengan Komunitas Kami</h3>
            <div class="flex justify-center space-x-4">
                <a href="https://chat.whatsapp.com/EOXtpHbgSSR32oh9xnvoK4" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-green-500 transition-colors duration-300 hover-scale">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                </a>
                <a href="https://discord.gg/85NvstR9ez" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-indigo-500 transition-colors duration-300 hover-scale">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/balitechhub.id/" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-pink-500 transition-colors duration-300 hover-scale">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Support Link -->
        <div class="text-sm text-gray-500 mt-6">
            <a href="mailto:contact@balitechhub.com" class="hover:text-black transition-colors duration-300">
                Hubungi Dukungan
            </a>
        </div>
    </div>
</body>
</html>
