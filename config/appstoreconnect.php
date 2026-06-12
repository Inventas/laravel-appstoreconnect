<?php

// config for Inventas/AppStoreConnectKit
return [
    'key_id' => env('APPSTORECONNECT_KEY_ID'),
    'issuer_id' => env('APPSTORECONNECT_ISSUER_ID'),
    'private_key' => env('APPSTORECONNECT_PRIVATE_KEY'),
    'openapi_spec_path' => base_path('vendor/inventas/laravel-appstoreconnect/openapi.oas.json'),
];
