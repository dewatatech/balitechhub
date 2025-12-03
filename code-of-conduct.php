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
    <title><?php echo $t['code_of_conduct']; ?> | Bali Tech Hub</title>
    <meta name="description"
        content="Bali Tech Hub Code of Conduct. Our guidelines for a safe and inclusive community.">

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
            <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php echo $t['code_of_conduct']; ?></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Our commitment to fostering a safe, inclusive, and welcoming community for everyone.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 prose prose-lg max-w-none">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Our Pledge</h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    In the interest of fostering an open and welcoming environment, we as contributors and
                    leaders pledge to making participation in our project and our community a
                    harassment-free experience for everyone, regardless of age, body size, disability,
                    ethnicity, sex characteristics, gender identity and expression, level of experience,
                    education, socio-economic status, nationality, personal appearance, race, religion, or
                    sexual identity and orientation.
                </p>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Our Standards</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Examples of behavior that contributes to creating a positive environment include:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li>Using welcoming and inclusive language</li>
                    <li>Being respectful of differing viewpoints and experiences</li>
                    <li>Gracefully accepting constructive criticism</li>
                    <li>Focusing on what is best for the community</li>
                    <li>Showing empathy towards other community members</li>
                </ul>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Examples of unacceptable behavior by participants include:
                </p>
                <ul class="list-disc pl-6 mb-8 text-gray-600 space-y-2">
                    <li>The use of sexualized language or imagery and unwelcome sexual attention or advances
                    </li>
                    <li>Trolling, insulting/derogatory comments, and personal or political attacks</li>
                    <li>Public or private harassment</li>
                    <li>Publishing others' private information, such as a physical or electronic address,
                        without explicit permission</li>
                    <li>Other conduct which could reasonably be considered inappropriate in a professional
                        setting</li>
                </ul>

                <h2 class="text-3xl font-bold mb-6 text-gray-900">Enforcement</h2>
                <p class="text-gray-600 leading-relaxed">
                    Instances of abusive, harassing, or otherwise unacceptable behavior may be reported by
                    contacting the project team at <a href="mailto:contact@balitechhub.com"
                        class="text-indigo-600 hover:text-indigo-800 font-medium">contact@balitechhub.com</a>.
                    All complaints will be reviewed and investigated and will result in a response that is
                    deemed necessary and appropriate to the circumstances. The project team is obligated to
                    maintain confidentiality with regard to the reporter of an incident.
                </p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>