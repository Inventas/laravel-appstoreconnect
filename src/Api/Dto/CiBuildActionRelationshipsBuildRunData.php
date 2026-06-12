<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiBuildActionRelationshipsBuildRunData
 */
class CiBuildActionRelationshipsBuildRunData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
