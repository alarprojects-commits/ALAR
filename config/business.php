<?php

return [
    'name' => 'ALAR Chauffeur Service',
    'legal_name' => 'ALAR Chauffeur Service',
    'url' => 'https://alarchauffeurservice.com',
    'email' => env('EMAIL_ADDRESS', 'limo@alarchauffeurservice.com'),
    'telephone' => env('CONTACT_NUMBER_TEL', '+12014314275'),
    'price_range' => '$$',
    // Square brand mark for schema / Google SERP brand icon (min 112x112, crawlable PNG).
    'logo' => '/assets/img/logo/fav-icon.png',
    'logo_width' => 200,
    'logo_height' => 200,
    'favicon' => '/assets/img/logo/fav-icon.png',
    // Site wordmark / default social share image.
    'image' => '/assets/img/logo/logo.png',
    'image_width' => 160,
    'image_height' => 113,
    'address' => [
        'streetAddress' => '10 Fairmount Ave',
        'addressLocality' => 'Edison',
        'addressRegion' => 'NJ',
        'postalCode' => '08820',
        'addressCountry' => 'US'
    ],
    'geo' => [
        'latitude' => 40.5431,
        'longitude' => -74.3784
    ],
    'area_served' => [
        'New Jersey',
        'New York',
        'Connecticut',
        'Pennsylvania',
        'California',
        'Nevada',
        'Washington'
    ],
    'founded_year' => 2023,
    'gbp_url' => 'https://maps.app.goo.gl/fKaPB2j36gVbcbcq9',
    'place_id' => env('GOOGLE_PLACE_ID'),
    'same_as' => [
        'https://www.facebook.com/profile.php?id=61581788001748',
        'https://www.instagram.com/alar_chauffeur_service/',
        'https://maps.app.goo.gl/fKaPB2j36gVbcbcq9'
    ],
    'opening_hours' => [
        'Mo-Su 00:00-23:59'
    ]
];
