<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferPriceRelationshipsSubscriptionPricePoint
 */
class WinBackOfferPriceRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public WinBackOfferPriceRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
