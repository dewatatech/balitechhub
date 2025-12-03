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
    <title><?php echo $t['volunteer']; ?> | Bali Tech Hub</title>
    <meta name="description" content="Volunteer with Bali Tech Hub. Help us build the tech community in Bali.">

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
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['volunteer']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Join our team of passionate volunteers and help shape the future of tech in Bali.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-custom-black rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-4">Want to get involved?</h2>
                <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                    We are always looking for volunteers to help with events, community management, content creation,
                    and more. If you are passionate about technology and want to give back to the community, we would
                    love to hear from you!
                </p>
                <div class="space-y-4">
                    <p class="font-medium">Please send an email to:</p>
                    <a href="mailto:contact@balitechhub.com"
                        class="text-2xl font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
                        contact@balitechhub.com
                    </a>
                    <p class="text-sm text-gray-500 mt-4">
                        Or contact the owner directly via our community channels.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>