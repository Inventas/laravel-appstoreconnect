<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiBuildRunRelationshipsWorkflowData
 */
class CiBuildRunRelationshipsWorkflowData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
