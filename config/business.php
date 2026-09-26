<?php

return [
    'name' => 'ALAR Chauffeur Service',
    'legal_name' => 'ALAR Chauffeur Service',
    'url' => 'https://alarchauffeurservice.com',
    'email' => env('EMAIL_ADDRESS', 'limo@alarchauffeurservice.com'),
    'telephone' => env('CONTACT_NUMBER_TEL', '+12014314275'),
    'price_range' => '$250-$3000',
    'logo' => '/assets/img/logo/logo.png',
    'image' => '/assets/img/logo/logo.png',
    'address' => [
        'streetAddress' => '10 Fairmount Ave',
        'addressLocality' => 'Edison',
        'addressRegion' => 'NJ',
        'postalCode' => '08820',
        'addressCountry' => 'US',
    ],
    'geo' => [
        'latitude' => 40.5431,
        'longitude' => -74.3784,
    ],
    'area_served' => [
        'New Jersey',
        'New York',
        'California',
        'Nevada',
        'Washington',
    ],
    // Google Business Profile
    'gbp_url' => 'https://maps.app.goo.gl/fKaPB2j36gVbcbcq9',
    'place_id' => env('GOOGLE_PLACE_ID'),
    'same_as' => [
        'https://www.facebook.com/profile.php?id=61581788001748',
        'https://www.instagram.com/alar_chauffeur_service/',
        'https://x.com/Alar_chauffeur',
        'https://linkedin.com/in/alar-chauffeur-services-415862383',
        'https://www.youtube.com/@AlarChauffeurService',
        'https://www.scoop.it/u/alar-chauffeur-service',
        'https://maps.app.goo.gl/fKaPB2j36gVbcbcq9',
    ],
    'opening_hours' => [
        'Mo-Su 00:00-23:59',
    ],
];
