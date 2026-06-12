<?php

test('environment has key id', function () {
    $keyId = config('appstoreconnect.key_id');
    expect($keyId)->not()->toBeNull()
        ->and($keyId)->toBeString()
        ->and($keyId)->not()->toBeEmpty();
});

test('environment has issuer id', function () {
    $issuerId = config('appstoreconnect.issuer_id');
    expect($issuerId)->not()->toBeNull()
        ->and($issuerId)->toBeString()
        ->and($issuerId)->not()->toBeEmpty();
});

test('environment has private key', function () {
    $privateKey = config('appstoreconnect.private_key');
    expect($privateKey)->not()->toBeNull()
        ->and($privateKey)->toBeString()
        ->and($privateKey)->not()->toBeEmpty();
});
