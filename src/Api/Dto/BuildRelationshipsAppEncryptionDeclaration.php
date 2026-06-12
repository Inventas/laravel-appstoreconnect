<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsAppEncryptionDeclaration
 */
class BuildRelationshipsAppEncryptionDeclaration extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public BuildRelationshipsAppEncryptionDeclarationData|Optional $data = new Optional,
    ) {}
}
