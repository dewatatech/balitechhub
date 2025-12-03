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
    <title><?php echo $t['terms']; ?> | Bali Tech Hub</title>
    <meta name="description" content="Terms of Service for Bali Tech Hub.">

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
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-custom-white text-custom-black font-sans">
    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-custom-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['terms']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Last updated: November 2024
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 prose prose-lg max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Agreement to Terms</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    These Terms of Service constitute a legally binding agreement made between you, whether
                    personally or on behalf of an entity ("you") and Bali Tech Hub ("we," "us" or "our"),
                    concerning your access to and use of the balitechhub.com website as well as any other
                    media form, media channel, mobile website or mobile application related, linked, or
                    otherwise connected thereto (collectively, the "Site").
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Intellectual Property Rights</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Unless otherwise indicated, the Site is our proprietary property and all source code,
                    databases, functionality, software, website designs, audio, video, text, photographs,
                    and graphics on the Site (collectively, the "Content") and the trademarks, service
                    marks, and logos contained therein (the "Marks") are owned or controlled by us or
                    licensed to us, and are protected by copyright and trademark laws.
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">User Representations</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    By using the Site, you represent and warrant that:
                </p>
                <ol class="list-decimal pl-6 mb-8 text-gray-600 space-y-2">
                    <li>All registration information you submit will be true, accurate, current, and
                        complete;</li>
                    <li>You will maintain the accuracy of such information and promptly update such
                        registration information as necessary;</li>
                    <li>You have the legal capacity and you agree to comply with these Terms of Service;
                    </li>
                    <li>You are not a minor in the jurisdiction in which you reside;</li>
                    <li>You will not access the Site through automated or non-human means, whether through a
                        bot, script or otherwise;</li>
                    <li>You will not use the Site for any illegal or unauthorized purpose; and</li>
                    <li>Your use of the Site will not violate any applicable law or regulation.</li>
                </ol>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Contact Us</h2>
                <p class="text-gray-600 leading-relaxed">
                    In order to resolve a complaint regarding the Site or to receive further information
                    regarding use of the Site, please contact us at: <a href="mailto:contact@balitechhub.com"
                        class="text-indigo-600 hover:text-indigo-800 font-medium">contact@balitechhub.com</a>
                </p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>