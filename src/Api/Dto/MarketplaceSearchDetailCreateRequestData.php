<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceSearchDetailCreateRequestData
 */
class MarketplaceSearchDetailCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public MarketplaceSearchDetailCreateRequestDataAttributes $attributes,
        public MarketplaceSearchDetailCreateRequestDataRelationships $relationships,
    ) {}
}
