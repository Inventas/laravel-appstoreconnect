<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationCreateRequestDataAttributes
 */
class AppEncryptionDeclarationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $appDescription,
        public bool $containsProprietaryCryptography,
        public bool $containsThirdPartyCryptography,
        public bool $availableOnFrenchStore,
    ) {}
}
