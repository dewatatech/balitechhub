<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | Bali Tech Hub</title>
    <meta name="description" content="Frequently asked questions about Bali Tech Hub - membership, events, partnerships, and how to get involved in Bali's tech community.">
    <meta name="keywords" content="bali tech hub faq, tech community questions, how to join bali tech hub, community membership bali">
    <meta name="author" content="Bali Tech Hub">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://balitechhub.com/faq.php">

    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="https://balitechhub.com/faq.php">
    <link rel="alternate" hreflang="id" href="https://balitechhub.com/id/faq-id.php">
    <link rel="alternate" hreflang="x-default" href="https://balitechhub.com/faq.php">

    <!-- Geo Location Tags -->
    <meta name="geo.region" content="ID-BA">
    <meta name="geo.placename" content="Bali">
    <meta name="geo.position" content="-8.3405;115.0920">
    <meta name="ICBM" content="-8.3405, 115.0920">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="FAQ | Bali Tech Hub">
    <meta property="og:description" content="Find answers to frequently asked questions about Bali Tech Hub and our tech community.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://balitechhub.com/faq.php">
    <meta property="og:image" content="https://balitechhub.com/assets/images/Bali Tech Hub Logo.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="Bali Tech Hub FAQ">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Bali Tech Hub">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FAQ | Bali Tech Hub">
    <meta name="twitter:description" content="Find answers to frequently asked questions about Bali Tech Hub.">
    <meta name="twitter:image" content="https://balitechhub.com/assets/images/Bali Tech Hub Logo.jpg">
    <meta name="twitter:image:alt" content="Bali Tech Hub FAQ">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Bali Tech Hub?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bali Tech Hub is the fastest growing technology community in Bali, bringing together developers, designers, entrepreneurs, and tech enthusiasts to collaborate, learn, and grow together."
          }
        },
        {
          "@type": "Question",
          "name": "How can I join the community?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can join our community through Discord, WhatsApp, or by attending our events. Visit our Community page for more details on how to get involved."
          }
        },
        {
          "@type": "Question",
          "name": "Are there membership fees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, joining Bali Tech Hub is completely free. We believe in making tech education and networking accessible to everyone."
          }
        }
      ]
    }
    </script>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

    <style>
        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .faq-content.active {
            max-height: 500px;
            transition: max-height 0.3s ease-in;
        }
        .faq-icon {
            transition: transform 0.3s ease;
        }
        .faq-icon.active {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="bg-custom-white text-custom-black font-sans">
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
            <!-- Logo with subtle animation -->
            <div class="mb-8 fade-in-scale">
                <img src="assets/images/Bali Tech Hub White Tranparant Logo.webp" alt="Bali Tech Hub Logo" class="mx-auto h-16 w-auto opacity-90">
            </div>

            <div class="space-y-6 mb-12">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight fade-in">
                    Frequently Asked <span class="bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Questions</span>
                </h1>
                <div class="max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-300 leading-relaxed">
                        Find answers to common questions about Bali Tech Hub and our community
                    </p>
                    <div class="mt-4 flex items-center justify-center space-x-2">
                        <div class="h-px w-16 bg-gray-600"></div>
                        <span class="text-gray-500 text-sm uppercase tracking-wider">FAQ</span>
                        <div class="h-px w-16 bg-gray-600"></div>
                    </div>
                </div>
            </div>

                <!-- Search -->
                <div class="max-w-2xl mx-auto fade-in">
                    <div class="relative">
                        <input type="text" id="faq-search" placeholder="Search for questions..." class="w-full px-6 py-4 pl-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/30 focus:border-transparent">
                        <svg class="w-5 h-5 text-gray-300 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Category Pills -->
            <div class="flex flex-wrap justify-center gap-3 mb-16 fade-in">
                <button onclick="filterFAQ('all')" class="category-btn px-6 py-3 bg-custom-black text-white rounded-full font-medium hover:bg-gray-800 transition-colors">
                    All Questions
                </button>
                <button onclick="filterFAQ('general')" class="category-btn px-6 py-3 bg-custom-gray text-custom-black rounded-full font-medium hover:bg-gray-200 transition-colors">
                    General
                </button>
                <button onclick="filterFAQ('membership')" class="category-btn px-6 py-3 bg-custom-gray text-custom-black rounded-full font-medium hover:bg-gray-200 transition-colors">
                    Membership
                </button>
                <button onclick="filterFAQ('partnership')" class="category-btn px-6 py-3 bg-custom-gray text-custom-black rounded-full font-medium hover:bg-gray-200 transition-colors">
                    Partnership
                </button>
            </div>

            <!-- FAQ Items -->
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- General Questions -->
                <div class="faq-item" data-category="general">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">What is Bali Tech Hub?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            Bali Tech Hub is the fastest growing technology community in Bali, bringing together developers, designers, entrepreneurs, and tech enthusiasts to collaborate, learn, and grow together. We provide networking opportunities and knowledge sharing for the tech community in Bali.
                        </p>
                    </div>
                </div>

                <div class="faq-item" data-category="general">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">Who can join Bali Tech Hub?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            Anyone interested in technology can join! Whether you're a student, professional developer, designer, entrepreneur, or simply tech-curious, you're welcome to be part of our community. We welcome all skill levels from beginners to experts.
                        </p>
                    </div>
                </div>

                <!-- Membership Questions -->
                <div class="faq-item" data-category="membership">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">How can I join the community?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            You can join our community through multiple platforms:
                            <br><br>
                            • <strong>Discord:</strong> Join our main server for real-time discussions
                            <br>
                            • <strong>WhatsApp:</strong> Join our WhatsApp community for quick updates
                            <br>
                            • <strong>Social Media:</strong> Follow us on Instagram, Twitter, and LinkedIn
                        </p>
                    </div>
                </div>

                <div class="faq-item" data-category="membership">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">Are there membership fees?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            No, joining Bali Tech Hub is completely free! We believe in making tech education and networking accessible to everyone. All our community activities are free for all members.
                        </p>
                    </div>
                </div>

                <div class="faq-item" data-category="membership">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">What are the benefits of joining?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            Benefits include:
                            <br><br>
                            • Networking with tech professionals in Bali
                            <br>
                            • Learning opportunities through discussions and knowledge sharing
                            <br>
                            • Access to job opportunities and internships
                            <br>
                            • Collaboration on tech projects
                            <br>
                            • Mentorship from experienced professionals
                            <br>
                            • Stay updated with the latest tech trends
                        </p>
                    </div>
                </div>

  
                <!-- Partnership Questions -->
                <div class="faq-item" data-category="partnership">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">How can my company partner with Bali Tech Hub?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            We offer various partnership opportunities including community sponsorship, venue partnerships, mentorship programs, and talent recruitment. You can learn more about our partnership options on our Partners page or contact us directly at contact@balitechhub.com to discuss customized partnership opportunities.
                        </p>
                    </div>
                </div>

                <div class="faq-item" data-category="partnership">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">Do you offer internship opportunities?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            Yes! We collaborate with various tech companies in Bali and beyond to provide internship opportunities for our community members. We often share internship postings through our Discord and WhatsApp communities. We also have partnerships with companies that specifically look for talent from our community.
                        </p>
                    </div>
                </div>

                <!-- More Questions -->
                <div class="faq-item" data-category="general">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">How can I contribute to the community?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            There are many ways to contribute:
                            <br><br>
                            • Share your knowledge through discussions and mentorship
                            <br>
                            • Mentor newcomers to the community
                            <br>
                            • Help organize community activities
                            <br>
                            • Share job opportunities
                            <br>
                            • Contribute to community projects
                            <br>
                            • Simply be an active and helpful community member
                        </p>
                    </div>
                </div>

                <div class="faq-item" data-category="general">
                    <div onclick="toggleFAQ(this)" class="bg-custom-gray p-6 rounded-xl cursor-pointer hover:bg-gray-100 transition-colors">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">I have more questions. How can I contact you?</h3>
                            <svg class="w-5 h-5 faq-icon text-custom-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-content bg-white p-6 rounded-b-xl">
                        <p class="text-gray-600 leading-relaxed">
                            We'd love to hear from you! You can reach out through:
                            <br><br>
                            • Email: contact@balitechhub.com
                            <br>
                            • Discord: Join our server and ask in the #questions channel
                            <br>
                            • WhatsApp: Join our community and message our admin team
                            <br>
                            • Contact Page: Fill out the contact form on our website
                        </p>
                    </div>
                </div>
            </div>

            <!-- Still Have Questions -->
            <div class="mt-20 text-center fade-in">
                <div class="bg-gradient-to-r from-custom-black to-gray-800 rounded-2xl p-12 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Still Have Questions?</h2>
                        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                            Can't find the answer you're looking for? We're here to help!
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="contact.php" class="bg-white text-custom-black px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 hover-lift shadow-lg">
                                Contact Us
                            </a>
                            <a href="community.php" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-custom-black transition-all duration-300 hover-lift">
                                Join Community
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="script.js"></script>
    <script>
        // FAQ Toggle
        function toggleFAQ(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('.faq-icon');

            content.classList.toggle('active');
            icon.classList.toggle('active');
        }

        // Filter FAQ
        function filterFAQ(category) {
            const items = document.querySelectorAll('.faq-item');
            const buttons = document.querySelectorAll('.category-btn');

            // Update button styles
            buttons.forEach(btn => {
                if (btn.textContent.toLowerCase().includes(category) ||
                    (category === 'all' && btn.textContent === 'All Questions')) {
                    btn.className = 'category-btn px-6 py-3 bg-custom-black text-white rounded-full font-medium hover:bg-gray-800 transition-colors';
                } else {
                    btn.className = 'category-btn px-6 py-3 bg-custom-gray text-custom-black rounded-full font-medium hover:bg-gray-200 transition-colors';
                }
            });

            // Show/hide items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Search functionality
        document.getElementById('faq-search').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const items = document.querySelectorAll('.faq-item');

            items.forEach(item => {
                const question = item.querySelector('h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-content p').textContent.toLowerCase();

                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Reset category filter when searching
            if (searchTerm) {
                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.className = 'category-btn px-6 py-3 bg-custom-gray text-custom-black rounded-full font-medium hover:bg-gray-200 transition-colors';
                });
            }
        });

        // Fade in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>