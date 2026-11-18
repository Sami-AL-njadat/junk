<?php

/*
|--------------------------------------------------------------------------
| Titan Cash For Junk Cars — business details
|--------------------------------------------------------------------------
|
| Single source of truth for name, phone, address and hours. Used by the
| views, the JSON-LD structured data, and the www → apex redirect.
|
*/

return [

    'name' => 'Titan Cash For Junk Cars',

    // Canonical origin (no trailing slash). Every page's canonical URL,
    // Open Graph URLs and the sitemap are built from this.
    'url' => rtrim(env('SITE_URL', 'https://titan-cash-for-junk-cars.com'), '/'),

    'phone' => '+13313414878',
    'phone_display' => '(331) 341-4878',

    'address' => [
        'street' => '9731 S 90th Ave',
        'city' => 'Palos Hills',
        'region' => 'IL',
        'postal_code' => '60465',
        'country' => 'US',
    ],

    'maps_url' => 'https://www.google.com/maps/search/?api=1&query=9731+S+90th+Ave%2C+Palos+Hills%2C+IL+60465',

    'hours' => [
        [
            'label' => 'Mon – Sat',
            'display' => '8:00 AM – 8:00 PM',
            'days' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            'opens' => '08:00',
            'closes' => '20:00',
        ],
        [
            'label' => 'Sunday',
            'display' => '10:00 AM – 6:00 PM',
            'days' => ['Sunday'],
            'opens' => '10:00',
            'closes' => '18:00',
        ],
    ],

    'gtm_id' => env('GTM_ID', 'GTM-P6LX63XM'),

];
