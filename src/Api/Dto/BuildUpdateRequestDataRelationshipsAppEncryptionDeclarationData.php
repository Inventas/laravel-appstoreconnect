<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUpdateRequestDataRelationshipsAppEncryptionDeclarationData
 */
class BuildUpdateRequestDataRelationshipsAppEncryptionDeclarationData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
