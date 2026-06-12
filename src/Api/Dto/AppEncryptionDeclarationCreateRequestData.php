<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationCreateRequestData
 */
class AppEncryptionDeclarationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppEncryptionDeclarationCreateRequestDataAttributes $attributes,
        public AppEncryptionDeclarationCreateRequestDataRelationships $relationships,
    ) {}
}
