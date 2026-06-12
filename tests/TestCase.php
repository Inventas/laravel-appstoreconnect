<?php

namespace Inventas\AppStoreConnectKit\Tests;

use Inventas\AppStoreConnectKit\AppStoreConnectKitServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AppStoreConnectKitServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('appstoreconnect.key_type', 'team');
        config()->set('appstoreconnect.key_id', 'TESTKEY123');
        config()->set('appstoreconnect.issuer_id', '00000000-0000-0000-0000-000000000000');
        config()->set('appstoreconnect.private_key', <<<'KEY'
-----BEGIN EC PRIVATE KEY-----
MHcCAQEEIEnVPQ1uHL9Y7EjbQfkk/sbWcxceJlQKvlSAbVKYKAWGoAoGCCqGSM49
AwEHoUQDQgAECQBCkGbypi1rB5bN3rXHgVohifcZCyyP12GMstrGoKbH6kUZEr0s
//dLJT4kV0xmMl2eSvj3C7ODBuZQZf0dnQ==
-----END EC PRIVATE KEY-----
KEY);
    }
}
