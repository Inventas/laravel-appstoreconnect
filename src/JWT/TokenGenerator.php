<?php

namespace Inventas\AppStoreConnectKit\JWT;

use DateTimeImmutable;
use Illuminate\Support\Facades\Cache;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\JwtFacade;
use Lcobucci\JWT\Signer\Ecdsa\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\UnencryptedToken;

class TokenGenerator
{
    public function issue(
        string $keyIdentifier,
        string $issuer,
        string $privateKey,
        ?array $scope = null
    ): UnencryptedToken {
        $audience = 'appstoreconnect-v1';

        $privateKey = str_replace('\\n', "\n", $privateKey);

        $key = InMemory::plainText($privateKey);

        return (new JwtFacade)->issue(
            new Sha256,
            $key,
            static fn (
                Builder $builder,
                DateTimeImmutable $issuedAt
            ): Builder => $builder
                ->issuedBy($issuer)
                ->withHeader('alg', 'ES256')
                ->withHeader('kid', $keyIdentifier)
                ->withHeader('typ', 'JWT')
                ->withClaim('scope', $scope)
                ->permittedFor($audience)
                ->expiresAt($issuedAt->modify('+20 minutes'))
        );
    }

    public function token(): string
    {
        return Cache::remember('appstoreconnect.token', 20 * 60, function () {
            $keyIdentifier = config('appstoreconnect.key_id');
            $issuerIdentifier = config('appstoreconnect.issuer_id');
            $privateKey = config('appstoreconnect.private_key');

            if (! is_string($keyIdentifier) || ! is_string($issuerIdentifier) || ! is_string($privateKey)) {
                throw new \RuntimeException('App Store Connect credentials are not configured.');
            }

            $token = $this->issue(
                keyIdentifier: $keyIdentifier,
                issuer: $issuerIdentifier,
                privateKey: $privateKey,
            );

            return $token->toString();
        });
    }
}
