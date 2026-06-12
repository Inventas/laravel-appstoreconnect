<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferPriceRelationships
 */
class WinBackOfferPriceRelationships extends SpatieData
{
    public function __construct(
        public WinBackOfferPriceRelationshipsTerritory|Optional $territory = new Optional,
        public WinBackOfferPriceRelationshipsSubscriptionPricePoint|Optional $subscriptionPricePoint = new Optional,
    ) {}
}
