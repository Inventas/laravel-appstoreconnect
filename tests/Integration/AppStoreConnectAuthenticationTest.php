<?php

use Dotenv\Dotenv;
use Inventas\AppStoreConnectKit\AppStoreConnector;
use Inventas\AppStoreConnectKit\JWT\TokenGenerator;
use PHPUnit\Framework\Assert;
use Saloon\Http\Faking\MockClient;

function appStoreConnectIntegrationCredentials(): array
{
    $path = dirname(__DIR__, 2).'/.env.appstoreconnect.local';

    if (! is_file($path)) {
        test()->markTestSkipped('Create .env.appstoreconnect.local to run App Store Connect integration tests.');
    }

    $credentials = Dotenv::parse((string) file_get_contents($path));

    foreach (['APPSTORECONNECT_KEY_ID', 'APPSTORECONNECT_PRIVATE_KEY'] as $key) {
        if (! isset($credentials[$key]) || trim((string) $credentials[$key]) === '') {
            test()->markTestSkipped("Missing {$key} in .env.appstoreconnect.local.");
        }
    }

    $keyType = strtolower((string) ($credentials['APPSTORECONNECT_KEY_TYPE'] ?? 'team'));

    if ($keyType === 'team' && (! isset($credentials['APPSTORECONNECT_ISSUER_ID']) || trim((string) $credentials['APPSTORECONNECT_ISSUER_ID']) === '')) {
        test()->markTestSkipped('Missing APPSTORECONNECT_ISSUER_ID in .env.appstoreconnect.local.');
    }

    return $credentials;
}

it('authenticates against the App Store Connect API with local credentials', function () {
    MockClient::destroyGlobal();

    $credentials = appStoreConnectIntegrationCredentials();

    config()->set('appstoreconnect.key_type', $credentials['APPSTORECONNECT_KEY_TYPE'] ?? 'team');
    config()->set('appstoreconnect.key_id', $credentials['APPSTORECONNECT_KEY_ID']);
    config()->set('appstoreconnect.issuer_id', $credentials['APPSTORECONNECT_ISSUER_ID'] ?? null);
    config()->set('appstoreconnect.private_key', $credentials['APPSTORECONNECT_PRIVATE_KEY']);
    cache()->forget('appstoreconnect.token');

    $token = (new TokenGenerator)->token();

    expect($token)->toBeString()->not()->toBeEmpty();

    $response = (new AppStoreConnector)->apps()->appsGetCollection(limit: 1);

    $message = sprintf(
        'Expected App Store Connect to accept the JWT, got HTTP %d: %s',
        $response->status(),
        json_encode($response->json(), JSON_PRETTY_PRINT) ?: $response->body(),
    );

    if ($response->status() !== 200) {
        Assert::fail($message);
    }

    expect($response->json())->toHaveKey('data');
})->group('integration');
