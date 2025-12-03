<?php
require_once __DIR__ . '/../includes/i18n.php';
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
    <title><?php echo $t['resources']; ?> | Bali Tech Hub</title>
    <meta name="description" content="Jelajahi sumber daya untuk developer, desainer, dan penggemar teknologi di Bali.">

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
</head>

<body class="bg-custom-white text-custom-black font-sans">
    <?php include __DIR__ . '/../includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-custom-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['resources']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Alat, panduan, dan tautan pilihan untuk komunitas teknologi Bali.
            </p>
        </div>
    </section>

    <!-- Resources Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Resource 1 -->
                <div class="p-6 border border-gray-200 rounded-xl hover:shadow-lg transition-all duration-300">
                    <h3 class="text-xl font-bold mb-3">Jalur Belajar</h3>
                    <p class="text-gray-600 mb-4">Jalur belajar pilihan untuk pengembangan web, data science, dan
                        lainnya.</p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800">Segera Hadir &rarr;</a>
                </div>

                <!-- Resource 2 -->
                <div class="p-6 border border-gray-200 rounded-xl hover:shadow-lg transition-all duration-300">
                    <h3 class="text-xl font-bold mb-3">Papan Kerja</h3>
                    <p class="text-gray-600 mb-4">Temukan pekerjaan teknologi terbaru di Bali dan peluang remote.</p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800">Segera Hadir &rarr;</a>
                </div>

                <!-- Resource 3 -->
                <div class="p-6 border border-gray-200 rounded-xl hover:shadow-lg transition-all duration-300">
                    <h3 class="text-xl font-bold mb-3">Toolkit Startup</h3>
                    <p class="text-gray-600 mb-4">Alat dan sumber daya penting untuk membangun startup di Bali.</p>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800">Segera Hadir &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <script src="../script.js"></script>
</body>

</html>