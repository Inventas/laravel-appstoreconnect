<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationshipsProduct
 */
class CiBuildRunRelationshipsProduct extends SpatieData
{
    public function __construct(
        public CiBuildRunRelationshipsProductData|Optional $data = new Optional,
    ) {}
}
