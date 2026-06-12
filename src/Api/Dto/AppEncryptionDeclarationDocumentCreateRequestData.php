<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEncryptionDeclarationDocumentCreateRequestData
 */
class AppEncryptionDeclarationDocumentCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppEncryptionDeclarationDocumentCreateRequestDataAttributes $attributes,
        public AppEncryptionDeclarationDocumentCreateRequestDataRelationships $relationships,
    ) {}
}
