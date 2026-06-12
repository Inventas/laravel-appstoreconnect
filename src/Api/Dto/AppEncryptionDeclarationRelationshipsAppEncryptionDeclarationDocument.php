<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationRelationshipsAppEncryptionDeclarationDocument
 */
class AppEncryptionDeclarationRelationshipsAppEncryptionDeclarationDocument extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppEncryptionDeclarationRelationshipsAppEncryptionDeclarationDocumentData|Optional $data = new Optional,
    ) {}
}
