<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WinBackOfferCreateRequestDataRelationships
 */
class WinBackOfferCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public WinBackOfferCreateRequestDataRelationshipsSubscription $subscription,
        public WinBackOfferCreateRequestDataRelationshipsPrices $prices,
    ) {}
}
