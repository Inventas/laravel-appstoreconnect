<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferPrice
 */
class WinBackOfferPrice extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public WinBackOfferPriceRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
