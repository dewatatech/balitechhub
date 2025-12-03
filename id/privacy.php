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
    <title><?php echo $t['privacy']; ?> | Bali Tech Hub</title>
    <meta name="description"
        content="Kebijakan Privasi Bali Tech Hub. Bagaimana kami mengumpulkan, menggunakan, dan melindungi data Anda.">

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
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['privacy']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Terakhir diperbarui: November 2024
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 prose prose-lg max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Pendahuluan</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Bali Tech Hub ("kami", "milik kami", atau "kita") berkomitmen untuk melindungi privasi
                    Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan,
                    mengungkapkan, dan menjaga informasi Anda ketika Anda mengunjungi situs web kami
                    balitechhub.com.
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Informasi yang Kami Kumpulkan</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Kami dapat mengumpulkan informasi tentang Anda dengan berbagai cara. Informasi yang
                    mungkin kami kumpulkan di Situs meliputi:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li><strong>Data Pribadi:</strong> Informasi yang dapat diidentifikasi secara pribadi,
                        seperti nama, alamat pengiriman, alamat email, dan nomor telepon Anda, yang Anda
                        berikan secara sukarela kepada kami ketika Anda mendaftar di Situs atau ketika Anda
                        memilih untuk berpartisipasi dalam berbagai kegiatan yang terkait dengan Situs.</li>
                    <li><strong>Data Turunan:</strong> Informasi yang dikumpulkan server kami secara
                        otomatis ketika Anda mengakses Situs, seperti alamat IP Anda, jenis browser Anda,
                        sistem operasi Anda, waktu akses Anda, dan halaman yang Anda lihat langsung sebelum
                        dan sesudah mengakses Situs.</li>
                </ul>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Penggunaan Informasi Anda</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Memiliki informasi yang akurat tentang Anda memungkinkan kami untuk memberi Anda
                    pengalaman yang lancar, efisien, dan disesuaikan. Secara khusus, kami dapat menggunakan
                    informasi yang dikumpulkan tentang Anda melalui Situs untuk:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li>Membuat dan mengelola akun Anda.</li>
                    <li>Mengirim email kepada Anda mengenai akun atau pesanan Anda.</li>
                    <li>Memenuhi dan mengelola pembelian, pesanan, pembayaran, dan transaksi lain yang
                        terkait dengan Situs.</li>
                    <li>Menghasilkan profil pribadi tentang Anda untuk membuat kunjungan di masa mendatang
                        ke Situs lebih personal.</li>
                    <li>Meningkatkan efisiensi dan operasi Situs.</li>
                </ul>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Hubungi Kami</h2>
                <p class="text-gray-600 leading-relaxed">
                    Jika Anda memiliki pertanyaan atau komentar tentang Kebijakan Privasi ini, silakan
                    hubungi kami di: <a href="mailto:contact@balitechhub.com"
                        class="text-indigo-600 hover:text-indigo-800 font-medium">contact@balitechhub.com</a>
                </p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <script src="../script.js"></script>
</body>

</html>