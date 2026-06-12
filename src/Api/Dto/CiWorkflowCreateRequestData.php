<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiWorkflowCreateRequestData
 */
class CiWorkflowCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public CiWorkflowCreateRequestDataAttributes $attributes,
        public CiWorkflowCreateRequestDataRelationships $relationships,
    ) {}
}
