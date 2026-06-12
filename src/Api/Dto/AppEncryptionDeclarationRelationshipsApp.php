<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEncryptionDeclarationRelationshipsApp
 */
class AppEncryptionDeclarationRelationshipsApp extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppEncryptionDeclarationRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
