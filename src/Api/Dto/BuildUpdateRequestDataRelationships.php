<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUpdateRequestDataRelationships
 */
class BuildUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BuildUpdateRequestDataRelationshipsAppEncryptionDeclaration|Optional $appEncryptionDeclaration = new Optional,
    ) {}
}
