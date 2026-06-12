<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiWorkflowCreateRequestDataRelationshipsProduct
 */
class CiWorkflowCreateRequestDataRelationshipsProduct extends SpatieData
{
    public function __construct(
        public CiWorkflowCreateRequestDataRelationshipsProductData $data,
    ) {}
}
