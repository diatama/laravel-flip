<?php

return [
    'environment' => env('FLIP_ENV', 'sandbox'),

    'client_key' => env('FLIP_CLIENT_KEY'),

    'validation_token' => env('FLIP_VALIDATION_TOKEN'),

    'production_base_url' => env('FLIP_PRODUCTION_BASE_URL', 'https://bigflip.id/api'),

    'sandbox_base_url' => env('FLIP_SANDBOX_BASE_URL', 'https://bigflip.id/big_sandbox_api'),

    'endpoints' => [
        'v2' => [
            'get_balance' => '/v2/general/balance',
            'get_banks' => '/v2/general/banks',
            'maintenance_status' => '/v2/general/maintenance',

            'bank_account_inquiry' => '/v2/disbursement/bank-account-inquiry',
            'get_countries' => '/v2/disbursement/country-list',
            'get_cities' => '/v2/disbursement/city-list',
            
            'get_bill' => '/v2/pwf',
            'create_bill' => '/v2/pwf/bill',
            'edit_bill' => '/v2/pwf/{bill_id}/bill',
        ],

        'v3' => [
            'money_transfer' => '/v3/disbursement',
            'special_money_transfer' => '/v3/special-disbursement',
            'get_disbursements' => '/v3/disbursement',
            'find_disbursement' => '/v3/get-disbursement',
        ]
    ],
];
