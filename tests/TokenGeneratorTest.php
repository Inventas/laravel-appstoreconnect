<?php

use Inventas\AppStoreConnectKit\JWT\TokenGenerator;
use Inventas\AppStoreConnectKit\JWT\AppStoreConnectKeyType;

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

it('omits the optional scope claim when no scope is provided', function () {
    $token = (new TokenGenerator)->issue(
        keyIdentifier: config('appstoreconnect.key_id'),
        issuer: config('appstoreconnect.issuer_id'),
        privateKey: config('appstoreconnect.private_key'),
    );

    expect($token->claims()->has('scope'))->toBeFalse()
        ->and($token->claims()->has('nbf'))->toBeFalse();
});

it('generates team key payload claims', function () {
    $token = (new TokenGenerator)->issue(
        keyIdentifier: config('appstoreconnect.key_id'),
        issuer: config('appstoreconnect.issuer_id'),
        privateKey: config('appstoreconnect.private_key'),
    );

    $encodedPayload = explode('.', $token->toString())[1];
    $payload = json_decode(base64_decode(strtr($encodedPayload, '-_', '+/')), true);

    expect($token->claims()->get('iss'))->toBe(config('appstoreconnect.issuer_id'))
        ->and($token->claims()->has('sub'))->toBeFalse()
        ->and($payload['aud'])->toBe('appstoreconnect-v1');
});

it('generates individual key payload claims', function () {
    $token = (new TokenGenerator)->issue(
        keyIdentifier: config('appstoreconnect.key_id'),
        issuer: null,
        privateKey: config('appstoreconnect.private_key'),
        keyType: AppStoreConnectKeyType::Individual,
    );

    $encodedPayload = explode('.', $token->toString())[1];
    $payload = json_decode(base64_decode(strtr($encodedPayload, '-_', '+/')), true);

    expect($token->claims()->get('sub'))->toBe('user')
        ->and($token->claims()->has('iss'))->toBeFalse()
        ->and($payload['aud'])->toBe('appstoreconnect-v1');
});

it('includes the optional scope claim when a scope is provided', function () {
    $token = (new TokenGenerator)->issue(
        keyIdentifier: config('appstoreconnect.key_id'),
        issuer: config('appstoreconnect.issuer_id'),
        privateKey: config('appstoreconnect.private_key'),
        scope: ['GET /v1/apps'],
    );

    expect($token->claims()->get('scope'))->toBe(['GET /v1/apps']);
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
