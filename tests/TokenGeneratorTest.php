<?php

use Inventas\AppStoreConnectKit\JWT\TokenGenerator;

it('can generate a token', function () {

    $keyIdentifier = config('appstoreconnect.key_id');
    $issuerIdentifier = config('appstoreconnect.issuer_id');
    $privateKey = config('appstoreconnect.private_key');

    //    dd($privateKey);

    $tokenGenerator = new TokenGenerator;
    $token = $tokenGenerator->issue(
        keyIdentifier: $keyIdentifier,
        issuer: $issuerIdentifier,
        privateKey: $privateKey,
    );

    expect($token->toString())->toBeString()->not()->toBeEmpty();

});

it('caches the token', function () {

    expect(cache()->has('appstoreconnect.token'))->toBeFalse();

    $tokenGenerator = new TokenGenerator;
    $token = $tokenGenerator->token();

    expect($token)->toBeString()->not()->toBeEmpty()
        ->and(cache()->has('appstoreconnect.token'))->toBeTrue();

    usleep(5_000);

    expect($tokenGenerator->token())->toBe($token);

});
