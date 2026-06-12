<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationDocumentCreateRequestDataRelationshipsAppEncryptionDeclaration
 */
class AppEncryptionDeclarationDocumentCreateRequestDataRelationshipsAppEncryptionDeclaration extends SpatieData
{
    public function __construct(
        public AppEncryptionDeclarationDocumentCreateRequestDataRelationshipsAppEncryptionDeclarationData $data,
    ) {}
}
