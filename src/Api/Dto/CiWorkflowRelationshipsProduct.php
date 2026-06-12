<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowRelationshipsProduct
 */
class CiWorkflowRelationshipsProduct extends SpatieData
{
    public function __construct(
        public CiWorkflowRelationshipsProductData|Optional $data = new Optional,
    ) {}
}
