<?php

namespace Inventas\AppStoreConnectKit\JWT;

use DateTimeImmutable;
use Illuminate\Support\Facades\Cache;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Encoding\ChainedFormatter;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Signer\Ecdsa\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Token\Builder as TokenBuilder;
use Lcobucci\JWT\UnencryptedToken;

class TokenGenerator
{
    public function issue(
        string $keyIdentifier,
        ?string $issuer,
        string $privateKey,
        ?array $scope = null,
        AppStoreConnectKeyType $keyType = AppStoreConnectKeyType::Team,
    ): UnencryptedToken {
        $audience = 'appstoreconnect-v1';

        $privateKey = str_replace('\\n', "\n", $privateKey);

        $key = InMemory::plainText($privateKey);
        $issuedAt = new DateTimeImmutable;

        $builder = TokenBuilder::new(new JoseEncoder, ChainedFormatter::withUnixTimestampDates())
            ->issuedAt($issuedAt)
            ->withHeader('alg', 'ES256')
            ->withHeader('kid', $keyIdentifier)
            ->withHeader('typ', 'JWT')
            ->permittedFor($audience)
            ->expiresAt($issuedAt->modify('+19 minutes'));

        $builder = self::withKeyPayload($builder, $keyType, $issuer);

        return self::withOptionalScope($builder, $scope)->getToken(new Sha256, $key);
    }

    private static function withKeyPayload(Builder $builder, AppStoreConnectKeyType $keyType, ?string $issuer): Builder
    {
        if ($keyType === AppStoreConnectKeyType::Individual) {
            return $builder->relatedTo('user');
        }

        if ($issuer === null || trim($issuer) === '') {
            throw new \RuntimeException('App Store Connect issuer ID is required for team API keys.');
        }

        return $builder->issuedBy($issuer);
    }

    private static function withOptionalScope(Builder $builder, ?array $scope): Builder
    {
        if ($scope === null) {
            return $builder;
        }

        return $builder->withClaim('scope', $scope);
    }

    public function token(): string
    {
        return Cache::remember('appstoreconnect.token', 19 * 60, function () {
            $keyIdentifier = config('appstoreconnect.key_id');
            $issuerIdentifier = config('appstoreconnect.issuer_id');
            $privateKey = config('appstoreconnect.private_key');
            $keyType = AppStoreConnectKeyType::fromConfig(config('appstoreconnect.key_type'));

            if (! is_string($keyIdentifier) || ! is_string($privateKey)) {
                throw new \RuntimeException('App Store Connect credentials are not configured.');
            }

            $token = $this->issue(
                keyIdentifier: $keyIdentifier,
                issuer: is_string($issuerIdentifier) ? $issuerIdentifier : null,
                privateKey: $privateKey,
                keyType: $keyType,
            );

            return $token->toString();
        });
    }
}
