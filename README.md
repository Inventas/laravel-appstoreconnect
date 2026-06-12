# A Laravel SDK for the App Store Connect API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inventas/laravel-appstoreconnect.svg?style=flat-square)](https://packagist.org/packages/inventas/laravel-appstoreconnect)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/inventas/laravel-appstoreconnect/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/inventas/laravel-appstoreconnect/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/inventas/laravel-appstoreconnect/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/inventas/laravel-appstoreconnect/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/inventas/laravel-appstoreconnect.svg?style=flat-square)](https://packagist.org/packages/inventas/laravel-appstoreconnect)

This package provides a Laravel-friendly Saloon SDK foundation for Apple's App Store Connect API. It includes JWT authentication helpers and an official OpenAPI specification file that can be used to generate typed Saloon requests and DTOs.

## Installation

You can install the package via composer:

```bash
composer require inventas/laravel-appstoreconnect
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-appstoreconnect-config"
```

This is the contents of the published config file:

```php
return [
    'key_type' => env('APPSTORECONNECT_KEY_TYPE', 'team'),
    'key_id' => env('APPSTORECONNECT_KEY_ID'),
    'issuer_id' => env('APPSTORECONNECT_ISSUER_ID'),
    'private_key' => env('APPSTORECONNECT_PRIVATE_KEY'),
];
```

## Usage

```php
use Inventas\AppStoreConnectKit\AppStoreConnector;

$connector = new AppStoreConnector();
$response = $connector->apps()->appsGetCollection();

$apps = $response->json('data');
```

## Generating the SDK

The package ships with Apple's `openapi.oas.json` specification. Maintainers can regenerate the Saloon SDK foundation in the `Inventas\AppStoreConnectKit\Api` namespace with:

```bash
composer generate-sdk
```

The generation script uses the Saloon SDK generator programmatically with package-specific DTO typing for nested objects, string-backed enum component references, primitive non-enum component references, request payloads, array item types, maps, and `oneOf` unions. It validates generated DTO constructor types, DTO PHPDoc, enum backing values, and endpoint parameter native types against the OpenAPI schema before writing files, preserves falsy query values while filtering nulls, models omitted optional DTO fields with Spatie `Optional`, orders required parameters during generation, and formats the SDK output. Generated files are disposable output in `src/Api`; typing improvements should be made in the code-generation classes, not by editing generated DTOs directly.

To verify the generator output without writing files, run:

```bash
composer generate-sdk-dry
```

The generated SDK is expected to pass strict generated-code analysis:

```bash
./vendor/bin/phpstan analyse src/Api --level=max --memory-limit=2G --no-progress
```

## Testing

```bash
composer test
```

Live App Store Connect authentication tests are opt-in and skipped by default unless local credentials are present. Create an untracked `.env.appstoreconnect.local` file in the project root:

```dotenv
APPSTORECONNECT_KEY_ID=ABC123DEFG
APPSTORECONNECT_KEY_TYPE=team
APPSTORECONNECT_ISSUER_ID=00000000-0000-0000-0000-000000000000
APPSTORECONNECT_PRIVATE_KEY="-----BEGIN EC PRIVATE KEY-----\n...\n-----END EC PRIVATE KEY-----"
```

Then run:

```bash
composer test-integration
```

For individual API keys, use `APPSTORECONNECT_KEY_TYPE=individual` and omit `APPSTORECONNECT_ISSUER_ID`; individual JWTs use `sub=user` instead of `iss`.

If Apple returns `401 NOT_AUTHORIZED`, verify that `APPSTORECONNECT_KEY_ID` matches the `AuthKey_<KEY_ID>.p8` filename, `APPSTORECONNECT_KEY_TYPE` matches the key kind, `APPSTORECONNECT_ISSUER_ID` is the App Store Connect issuer UUID and not the team ID for team keys, and the API key is active for the App Store Connect API account you are testing.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lennart Fischer](https://github.com/Inventas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
