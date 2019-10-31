<?php

/**
 * Company details for cashier invoice generation
 * */
return [
    'logo_path' => env('COMPANY_LOGO_PATH', 'app/public/img/logo.svg'),

    /* For eg, in Australia it is called ABN (Australian Business Number) */
    'business_number_identifier' => env('BUSINESS_NUMBER_IDENTIFIER', 'Business Number'),
    'business_number' => env('COMPANY_BUSINESS_NUMBER', '12343213125'),
    'phone' => env('COMPANY_PHONE', '+61 4231 2312'),
    'street' => env('COMPANY_STREET', '12 Street'),
    'city' => env('COMPANY_CITY', 'Beaucity'),
    'state' => env('COMPANY_STATE', 'WA'),
    'country' => env('COMPANY_COUNTRY', 'Australia'),
    'postcode' => env('COMPANY_POSTCODE', '6000'),
    'chromium_path' => '/usr/lib/chromium/chromium-launcher.sh'
];
