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
    <title><?php echo $t['terms']; ?> | Bali Tech Hub</title>
    <meta name="description" content="Syarat Layanan Bali Tech Hub.">

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
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['terms']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Terakhir diperbarui: November 2024
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 prose prose-lg max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Persetujuan Syarat</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Syarat Layanan ini merupakan perjanjian yang mengikat secara hukum yang dibuat antara
                    Anda, baik secara pribadi atau atas nama entitas ("Anda") dan Bali Tech Hub ("kami",
                    "kita" atau "milik kami"), mengenai akses Anda ke dan penggunaan situs web
                    balitechhub.com serta bentuk media lainnya, saluran media, situs web seluler atau
                    aplikasi seluler yang terkait, tertaut, atau terhubung dengannya (secara kolektif
                    disebut "Situs").
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Hak Kekayaan Intelektual</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Kecuali dinyatakan lain, Situs ini adalah milik kami dan semua kode sumber, basis data,
                    fungsionalitas, perangkat lunak, desain situs web, audio, video, teks, foto, dan grafik
                    di Situs (secara kolektif disebut "Konten") dan merek dagang, merek layanan, dan logo
                    yang terkandung di dalamnya ("Merek") dimiliki atau dikendalikan oleh kami atau
                    dilisensikan kepada kami, dan dilindungi oleh undang-undang hak cipta dan merek dagang.
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Representasi Pengguna</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Dengan menggunakan Situs, Anda menyatakan dan menjamin bahwa:
                </p>
                <ol class="list-decimal pl-6 mb-8 text-gray-600 space-y-2">
                    <li>Semua informasi pendaftaran yang Anda kirimkan adalah benar, akurat, terkini, dan
                        lengkap;</li>
                    <li>Anda akan menjaga keakuratan informasi tersebut dan segera memperbarui informasi
                        pendaftaran tersebut jika diperlukan;</li>
                    <li>Anda memiliki kapasitas hukum dan Anda setuju untuk mematuhi Syarat Layanan ini;
                    </li>
                    <li>Anda bukan anak di bawah umur di yurisdiksi tempat Anda tinggal;</li>
                    <li>Anda tidak akan mengakses Situs melalui cara otomatis atau non-manusia, baik melalui
                        bot, skrip, atau lainnya;</li>
                    <li>Anda tidak akan menggunakan Situs untuk tujuan ilegal atau tidak sah; dan</li>
                    <li>Penggunaan Situs oleh Anda tidak akan melanggar hukum atau peraturan yang berlaku.
                    </li>
                </ol>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Hubungi Kami</h2>
                <p class="text-gray-600 leading-relaxed">
                    Untuk menyelesaikan keluhan mengenai Situs atau untuk menerima informasi lebih lanjut
                    mengenai penggunaan Situs, silakan hubungi kami di: <a href="mailto:contact@balitechhub.com"
                        class="text-indigo-600 hover:text-indigo-800 font-medium">contact@balitechhub.com</a>
                </p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <script src="../script.js"></script>
</body>

</html>