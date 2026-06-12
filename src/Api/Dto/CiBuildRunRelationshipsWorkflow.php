<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationshipsWorkflow
 */
class CiBuildRunRelationshipsWorkflow extends SpatieData
{
    public function __construct(
        public CiBuildRunRelationshipsWorkflowData|Optional $data = new Optional,
    ) {}
}
