<?php
require_once __DIR__ . '/includes/i18n.php';
$lang = bth_current_lang();
$base = bth_base_path($lang);
global $BTH_T;
$t = $BTH_T[$lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Bali Tech Hub | Connect with Bali's Tech Community</title>
    <meta name="description" content="Get in touch with Bali Tech Hub. Find our contact information, social media links, and connect with Bali's largest technology community.">
    <meta name="keywords" content="Bali Tech Hub contact, tech community Bali, technology events Bali, startup community Bali">
    <meta name="author" content="Bali Tech Hub">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Contact Us - Bali Tech Hub">
    <meta property="og:description" content="Connect with Bali's largest technology community. Find our contact information and social media links.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://balitechhub.com/contact.php">
    <meta property="og:image" content="https://balitechhub.com/assets/images/Bali Tech Hub Logo.jpg">
    <meta property="og:site_name" content="Bali Tech Hub">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Us - Bali Tech Hub">
    <meta name="twitter:description" content="Connect with Bali's largest technology community. Find our contact information and social media links.">
    <meta name="twitter:image" content="https://balitechhub.com/assets/images/Bali Tech Hub Logo.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://balitechhub.com/contact.php">

    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="https://balitechhub.com/contact.php">
    <link rel="alternate" hreflang="id" href="https://balitechhub.com/contact-id.php">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-black': '#0a0a0a',
                        'custom-white': '#fafafa',
                        'custom-gray': '#f5f5f5'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-in-out',
                        'fade-in-up': 'fadeInUp 0.8s ease-in-out',
                        'fade-in-left': 'fadeInLeft 0.8s ease-in-out',
                        'fade-in-right': 'fadeInRight 0.8s ease-in-out',
                        'fade-in-scale': 'fadeInScale 0.8s ease-in-out',
                        'hover-lift': 'hoverLift 0.3s ease-out',
                        'float-animation': 'float 6s ease-in-out infinite',
                        'pulse-animation': 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        fadeInScale: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' }
                        },
                        hoverLift: {
                            '0%': { transform: 'translateY(0px)' },
                            '100%': { transform: 'translateY(-10px)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "name": "Contact Bali Tech Hub",
      "description": "Contact information and social media links for Bali Tech Hub technology community",
      "url": "https://balitechhub.com/contact.php",
      "inLanguage": "en",
      "provider": {
        "@type": "Organization",
        "name": "Bali Tech Hub",
        "url": "https://balitechhub.com",
        "logo": {
          "@type": "ImageObject",
          "url": "https://balitechhub.com/assets/images/Bali Tech Hub Logo.jpg",
          "width": 1200,
          "height": 630
        },
        "sameAs": [
          "https://discord.gg/85NvstR9ez",
          "https://www.instagram.com/balitechhub.id/",
          "https://x.com/balitechhub",
          "https://www.linkedin.com/company/balitechhub",
          "https://www.facebook.com/profile.php?id=61581061241603",
          "https://chat.whatsapp.com/DO1RQrJiw1y0VxuNIYsFXm"
        ],
        "contactPoint": {
          "@type": "ContactPoint",
          "email": "contact@balitechhub.com",
          "contactType": "customer service",
          "availableLanguage": ["English", "Indonesian"]
        }
      }
    }
    </script>
</head>
<body class="bg-custom-white text-custom-black font-sans smooth-scroll">
    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="min-h-[60vh] flex items-center justify-center relative bg-gradient-to-br from-slate-900 via-custom-black to-slate-900 pt-16">
        <!-- Subtle background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.02"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="space-y-6">
                <!-- Logo with subtle animation -->
                <div class="mb-8 fade-in-scale">
                    <img src="assets/images/Bali Tech Hub White Tranparant Logo.webp" alt="Bali Tech Hub Logo" class="mx-auto h-16 w-auto opacity-90">
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight fade-in">
                    Get in Touch
                </h1>
                <div class="max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-300 leading-relaxed">
                        Connect with Bali's largest technology community
                    </p>
                    <div class="mt-4 flex items-center justify-center space-x-2">
                        <div class="h-px w-16 bg-gray-600"></div>
                        <span class="text-gray-500 text-sm uppercase tracking-wider">Contact</span>
                        <div class="h-px w-16 bg-gray-600"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-20 bg-gradient-to-br from-custom-gray to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml;utf8,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'0.1\'%3E%3Ccircle cx=\'20\' cy=\'20\' r=\'1.5\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-in">
                <div class="inline-block p-3 bg-custom-black rounded-full mb-6 fade-in-scale">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-custom-black mb-6 fade-in">Contact Information</h2>
                <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed fade-in">
                    Reach out to us through any of these channels. We're always excited to connect with tech enthusiasts, potential partners, and community members.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Email Contact -->
                <a href="mailto:contact@balitechhub.com" class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover-lift border border-gray-100 fade-in-up block">
                    <div class="w-16 h-16 bg-custom-black rounded-2xl flex items-center justify-center mx-auto mb-6 hover-scale shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-custom-black mb-4 text-center">Email</h3>
                    <div class="text-center">
                        <p class="text-gray-700 group-hover:text-custom-black transition-colors duration-300 text-lg font-medium">
                            contact@balitechhub.com
                        </p>
                        <p class="text-gray-500 mt-2 text-sm">General inquiries and partnerships</p>
                    </div>
                </a>

                <!-- WhatsApp Contact -->
                <a href="https://chat.whatsapp.com/EOXtpHbgSSR32oh9xnvoK4" target="_blank" rel="noopener noreferrer" class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover-lift border border-gray-100 fade-in-up block" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-6 hover-scale shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2zm0 1.67c2.2 0 4.26.86 5.82 2.42a8.225 8.225 0 0 1 2.42 5.83c0 4.54-3.7 8.23-8.24 8.23-1.48 0-2.93-.39-4.19-1.15l-.3-.18-.31.08-1.26.33.33-1.22.09-.34-.2-.32a8.188 8.188 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24M8.53 7.33c-.16 0-.43.06-.66.31-.22.25-.87.86-.87 2.07 0 1.22.89 2.39 1 2.56.12.17 1.76 2.67 4.25 3.73.59.27 1.05.42 1.41.53.59.19 1.13.16 1.56.1.48-.07 1.46-.6 1.67-1.18.21-.58.21-1.07.15-1.18-.07-.1-.23-.16-.48-.27-.25-.14-1.47-.74-1.69-.82-.23-.08-.37-.12-.56.12-.16.25-.64.81-.78.97-.15.17-.29.19-.53.07-.26-.13-1.06-.39-2-1.23-.74-.66-1.23-1.47-1.38-1.72-.12-.24-.01-.39.11-.5.11-.11.27-.29.37-.44.13-.14.17-.25.25-.41.08-.17.04-.31-.02-.43-.06-.11-.56-1.35-.77-1.84-.2-.48-.4-.42-.54-.43-.14 0-.3-.01-.47-.01z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-custom-black mb-4 text-center">WhatsApp</h3>
                    <div class="text-center">
                        <p class="text-gray-700 group-hover:text-green-600 transition-colors duration-300 text-lg font-medium">
                            Join Community
                        </p>
                        <p class="text-gray-500 mt-2 text-sm">Quick responses and community chat</p>
                    </div>
                </a>

                <!-- Discord Contact -->
                <a href="https://discord.gg/85NvstR9ez" target="_blank" rel="noopener noreferrer" class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover-lift border border-gray-100 fade-in-up block" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 hover-scale shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-custom-black mb-4 text-center">Discord</h3>
                    <div class="text-center">
                        <p class="text-gray-700 group-hover:text-indigo-600 transition-colors duration-300 text-lg font-medium">
                            Join Server
                        </p>
                        <p class="text-gray-500 mt-2 text-sm">Tech discussions and events</p>
                    </div>
                </a>
            </div>

            <!-- Social Media Links -->
            <div class="bg-custom-black rounded-3xl p-8 md:p-12 text-white relative overflow-hidden mb-16">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                <div class="relative z-10">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl md:text-4xl font-bold mb-4">Follow Our Community</h3>
                        <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                            Stay updated with our latest events, tech talks, and community news
                        </p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/balitechhub.id/" target="_blank" rel="noopener noreferrer" class="group flex flex-col items-center justify-center p-6 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300 hover-lift">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm group-hover:text-white transition-colors duration-300">Instagram</span>
                        </a>

                        <!-- X (Twitter) -->
                        <a href="https://x.com/balitechhub" target="_blank" rel="noopener noreferrer" class="group flex flex-col items-center justify-center p-6 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300 hover-lift">
                            <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm group-hover:text-white transition-colors duration-300">X (Twitter)</span>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/balitechhub" target="_blank" rel="noopener noreferrer" class="group flex flex-col items-center justify-center p-6 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300 hover-lift">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 c0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm group-hover:text-white transition-colors duration-300">LinkedIn</span>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/profile.php?id=61581061241603" target="_blank" rel="noopener noreferrer" class="group flex flex-col items-center justify-center p-6 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300 hover-lift">
                            <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm group-hover:text-white transition-colors duration-300">Facebook</span>
                        </a>

                        <!-- YouTube -->
                        <a href="https://youtube.com/@balitechhub" target="_blank" rel="noopener noreferrer" class="group flex flex-col items-center justify-center p-6 bg-white/5 rounded-2xl hover:bg-white/10 transition-all duration-300 hover-lift">
                            <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </div>
                            <span class="text-gray-300 text-sm group-hover:text-white transition-colors duration-300">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-custom-black text-white relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 right-20 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Join Our Community?</h2>
                <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
                    Become part of Bali's growing tech ecosystem. Connect, learn, and innovate with fellow tech enthusiasts.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="https://chat.whatsapp.com/DO1RQrJiw1y0VxuNIYsFXm" target="_blank" rel="noopener noreferrer" class="px-8 py-4 bg-white text-custom-black rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        Join WhatsApp Community
                    </a>
                    <a href="https://discord.gg/85NvstR9ez" target="_blank" rel="noopener noreferrer" class="px-8 py-4 border border-gray-600 text-white rounded-lg font-semibold hover:bg-white hover:text-custom-black transition-all duration-300">
                        Join Discord Server
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- JavaScript -->
    <script src="script.js"></script>

    <!-- Intersection Observer for fade-in animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fade in animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all fade-in elements
            document.querySelectorAll('.fade-in, .fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>