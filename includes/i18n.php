<?php
function bth_current_lang(): string
{
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $script = $_SERVER['PHP_SELF'] ?? '';
    if (preg_match('#^/id($|/)#', $uri))
        return 'id';
    if (str_ends_with($script, '-id.php'))
        return 'id';
    return 'en';
}

function bth_base_path(string $lang): string
{
    return $lang === 'id' ? '/id/' : '/';
}

$BTH_T = [
    'en' => [
        'home' => 'Home',
        'about' => 'About',
        'community' => 'Community',
        'partners' => 'Partners',
        'blog' => 'Blog',
        'contact' => 'Contact',
        'supported_by' => 'Supported By',
        'social_media' => 'Social Media',
        'copyright' => '© 2025 Bali Tech Hub. All rights reserved.',
        'join' => 'Join Free',
        'resources' => 'Resources',
        'code_of_conduct' => 'Code of Conduct',
        'volunteer' => 'Volunteer',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms of Service'
    ],
    'id' => [
        'home' => 'Beranda',
        'about' => 'Tentang',
        'community' => 'Komunitas',
        'partners' => 'Mitra',
        'blog' => 'Blog',
        'contact' => 'Kontak',
        'supported_by' => 'Didukung Oleh',
        'social_media' => 'Media Sosial',
        'copyright' => '© 2025 Bali Tech Hub. Hak cipta dilindungi.',
        'join' => 'Gabung Gratis',
        'resources' => 'Sumber Daya',
        'code_of_conduct' => 'Kode Etik',
        'volunteer' => 'Relawan',
        'privacy' => 'Kebijakan Privasi',
        'terms' => 'Syarat Layanan'
    ],
];

