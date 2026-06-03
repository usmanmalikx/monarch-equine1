<?php
$site_name = 'Monarch Equine';
$site_email = 'monarch-garden@outlook.com';
$site_phone = '805-901-0874';
$site_phone_link = '805-901-0874';
$site_address = '4651 Donlon Rd, Somis, CA 93066';
$site_open_hours = 'Mon - Fri: 8:00AM - 6:00PM';
$site_header_hours = 'Open Hours: Mon - Fri 8.00 am - 6.00 pm';

$site_social_links = [
    'instagram' => [
        'url' => 'https://www.instagram.com/monarchgarden2026',
        'icon' => 'fab fa-instagram',
    ],
];

if (!function_exists('site_esc')) {
    function site_esc($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}
