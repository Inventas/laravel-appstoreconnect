<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationCreateRequestDataRelationshipsApp
 */
class AppEncryptionDeclarationCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationCreateRequestDataRelationshipsAppData $data,
    ) {}
}
