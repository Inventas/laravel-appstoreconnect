# Changelog

All notable changes to `laravel-appstoreconnect` will be documented in this file.

## Unreleased

- Align GitHub Actions with the supported PHP 8.3 and Laravel 12/13 test matrix on Ubuntu.
- Add opt-in live App Store Connect authentication integration tests.
- Omit unsupported empty scope and not-before JWT claims from App Store Connect authentication tokens.
- Support App Store Connect JWT payloads for both team and individual API keys.
- Support older `nette/php-generator` versions selected by the prefer-lowest CI matrix.

## 0.1.0 - 2026-06-12

- Upgrade the package to current Saloon v4 packages and Laravel 12/13-compatible dependencies.
- Add a local typed Saloon SDK generation pipeline for Apple's bundled `openapi.oas.json` specification.
- Replace the generated SDK namespace with `Inventas\AppStoreConnectKit\Api`.
- Generate typed DTOs for nested OpenAPI objects, arrays, maps, and `oneOf` unions without manually editing generated files.
- Generate typed request payload parameters for OpenAPI request bodies and preserve falsy query values while filtering nulls.
- Generate required DTO constructor parameters from OpenAPI `required` fields and use Spatie `Optional` for omitted optional payload fields.
- Generate string-backed enums for OpenAPI string enum component references and keep primitive non-enum references as scalar payload types.
- Validate generated DTO and endpoint parameter types against the OpenAPI schema during generation and remove post-generation replacement cleanup.
- Analyze the SDK generation script and generator source with PHPStan.
- Remove unused package skeleton migrations, views, factories, and placeholder command.
