<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUpdateRequestDataRelationshipsAppEncryptionDeclaration
 */
class BuildUpdateRequestDataRelationshipsAppEncryptionDeclaration extends SpatieData
{
    public function __construct(
        public BuildUpdateRequestDataRelationshipsAppEncryptionDeclarationData|Optional $data = new Optional,
    ) {}
}
