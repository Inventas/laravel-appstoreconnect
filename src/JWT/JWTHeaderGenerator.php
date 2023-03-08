<?php

namespace Inventas\AppStoreConnectKit\JWT;

class JWTHeaderGenerator
{

    public function generate(
        string $keyIdentifier,
        EncryptionAlgorithm $algorithm = EncryptionAlgorithm::ES256,
        string $type = 'JWT'
    ): array
    {
        return [
            "alg" => $algorithm->value,
            "kid" => $keyIdentifier,
            "typ" => $type,
        ];
    }

    public function generateJsonHeader(string $keyIdentifier) : string
    {
        $header = $this->generate(
            keyIdentifier: $keyIdentifier
        );

        return json_encode($header);
    }

    public function generatePayload(
        string $issuerId,
        int $expiresIn = 20 * 60,
        ?array $scope = null
    ) {

        $payload = [
            'iss' => $issuerId,
            'iat' => time(),
            'exp' => time() + $expiresIn,
            'aud' => 'appstoreconnect-v1',
        ];

        if ($scope) {
            $payload['scope'] = $scope;
        }

        return $payload;
    }

}
