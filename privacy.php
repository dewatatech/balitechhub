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
    <title><?php echo $t['privacy']; ?> | Bali Tech Hub</title>
    <meta name="description" content="Privacy Policy for Bali Tech Hub. How we collect, use, and protect your data.">

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
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['privacy']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Last updated: November 2024
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 prose prose-lg max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Introduction</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Bali Tech Hub ("we", "our", or "us") is committed to protecting your privacy. This
                    Privacy Policy explains how we collect, use, disclose, and safeguard your information
                    when you visit our website balitechhub.com.
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Information We Collect</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    We may collect information about you in a variety of ways. The information we may
                    collect on the Site includes:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li><strong>Personal Data:</strong> Personally identifiable information, such as your
                        name, shipping address, email address, and telephone number, that you voluntarily
                        give to us when you register with the Site or when you choose to participate in
                        various activities related to the Site.</li>
                    <li><strong>Derivative Data:</strong> Information our servers automatically collect when
                        you access the Site, such as your IP address, your browser type, your operating
                        system, your access times, and the pages you have viewed directly before and after
                        accessing the Site.</li>
                </ul>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Use of Your Information</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Having accurate information about you permits us to provide you with a smooth,
                    efficient, and customized experience. Specifically, we may use information collected
                    about you via the Site to:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li>Create and manage your account.</li>
                    <li>Email you regarding your account or order.</li>
                    <li>Fulfill and manage purchases, orders, payments, and other transactions related to
                        the Site.</li>
                    <li>Generate a personal profile about you to make future visits to the Site more
                        personalized.</li>
                    <li>Increase the efficiency and operation of the Site.</li>
                </ul>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Contact Us</h2>
                <p class="text-gray-600 leading-relaxed">
                    If you have questions or comments about this Privacy Policy, please contact us at: <a
                        href="mailto:contact@balitechhub.com"
                        class="text-indigo-600 hover:text-indigo-800 font-medium">contact@balitechhub.com</a>
                </p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>