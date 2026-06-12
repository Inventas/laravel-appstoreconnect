<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowUpdateRequestData
 */
class CiWorkflowUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CiWorkflowUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public CiWorkflowUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
