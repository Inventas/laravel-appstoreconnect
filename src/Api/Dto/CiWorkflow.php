<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflow
 */
class CiWorkflow extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CiWorkflowAttributes|Optional $attributes = new Optional,
        public CiWorkflowRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
