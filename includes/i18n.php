<?php
function bth_root_url(): string
{
    $root_path = str_replace('\\', '/', dirname(__DIR__));
    $doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    $url = str_replace($doc_root, '', $root_path);
    return rtrim($url, '/');
}

function bth_current_lang(): string
{
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $root = bth_root_url();

    // Remove root path from URI to get relative path
    if ($root && str_starts_with($uri, $root)) {
        $uri = substr($uri, strlen($root));
    }

    $script = $_SERVER['PHP_SELF'] ?? '';
    if (preg_match('#^/id($|/)#', $uri))
        return 'id';
    if (str_ends_with($script, '-id.php'))
        return 'id';
    return 'en';
}

function bth_base_path(string $lang): string
{
    $root = bth_root_url();
    return $root . ($lang === 'id' ? '/id/' : '/');
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

