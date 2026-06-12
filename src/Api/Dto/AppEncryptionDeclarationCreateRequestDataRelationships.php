<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationCreateRequestDataRelationships
 */
class AppEncryptionDeclarationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationCreateRequestDataRelationshipsApp $app,
    ) {}
}
