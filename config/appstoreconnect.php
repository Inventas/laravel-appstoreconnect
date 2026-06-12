<?php

return [
    'key_type' => env('APPSTORECONNECT_KEY_TYPE', 'team'), # team / individual
    'key_id' => env('APPSTORECONNECT_KEY_ID'),
    'issuer_id' => env('APPSTORECONNECT_ISSUER_ID'),
    'private_key' => env('APPSTORECONNECT_PRIVATE_KEY'),
];
