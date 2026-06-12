<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunCreateRequestDataRelationshipsWorkflow
 */
class CiBuildRunCreateRequestDataRelationshipsWorkflow extends SpatieData
{
    public function __construct(
        public CiBuildRunCreateRequestDataRelationshipsWorkflowData|Optional $data = new Optional,
    ) {}
}
