<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationDocumentCreateRequestDataRelationships
 */
class AppEncryptionDeclarationDocumentCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationDocumentCreateRequestDataRelationshipsAppEncryptionDeclaration $appEncryptionDeclaration,
    ) {}
}
