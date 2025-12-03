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
    <title><?php echo $t['code_of_conduct']; ?> | Bali Tech Hub</title>
    <meta name="description" content="Kode Etik Bali Tech Hub. Panduan kami untuk komunitas yang aman dan inklusif.">

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
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['code_of_conduct']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Komitmen kami untuk membina komunitas yang aman, inklusif, dan ramah bagi semua orang.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 prose prose-lg max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Janji Kami</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Demi membina lingkungan yang terbuka dan ramah, kami sebagai kontributor dan pemimpin
                    berjanji untuk menjadikan partisipasi dalam proyek dan komunitas kami sebagai pengalaman
                    yang bebas dari pelecehan bagi semua orang, tanpa memandang usia, ukuran tubuh,
                    disabilitas, etnis, karakteristik seks, identitas dan ekspresi gender, tingkat
                    pengalaman, pendidikan, status sosial ekonomi, kebangsaan, penampilan pribadi, ras,
                    agama, atau identitas dan orientasi seksual.
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Standar Kami</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Contoh perilaku yang berkontribusi dalam menciptakan lingkungan yang positif meliputi:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li>Menggunakan bahasa yang ramah dan inklusif</li>
                    <li>Menghormati sudut pandang dan pengalaman yang berbeda</li>
                    <li>Menerima kritik yang membangun dengan lapang dada</li>
                    <li>Berfokus pada apa yang terbaik bagi komunitas</li>
                    <li>Menunjukkan empati terhadap anggota komunitas lainnya</li>
                </ul>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Contoh perilaku yang tidak dapat diterima oleh peserta meliputi:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li>Penggunaan bahasa atau citra seksual dan perhatian atau rayuan seksual yang tidak
                        diinginkan</li>
                    <li>Trolling, komentar yang menghina/merendahkan, dan serangan pribadi atau politik</li>
                    <li>Pelecehan di depan umum atau pribadi</li>
                    <li>Mempublikasikan informasi pribadi orang lain, seperti alamat fisik atau elektronik,
                        tanpa izin tertulis</li>
                    <li>Perilaku lain yang secara wajar dapat dianggap tidak pantas dalam lingkungan
                        profesional</li>
                </ul>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Penegakan</h2>
                <p class="text-gray-600 leading-relaxed">
                    Kejadian perilaku kasar, melecehkan, atau perilaku lain yang tidak dapat diterima dapat
                    dilaporkan dengan menghubungi tim proyek di <a href="mailto:contact@balitechhub.com"
                        class="text-indigo-600 hover:text-indigo-800 font-medium">contact@balitechhub.com</a>.
                    Semua keluhan akan ditinjau dan diselidiki serta akan menghasilkan tanggapan yang
                    dianggap perlu dan sesuai dengan keadaan. Tim proyek berkewajiban untuk menjaga
                    kerahasiaan pelapor insiden.
                </p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <script src="../script.js"></script>
</body>

</html>