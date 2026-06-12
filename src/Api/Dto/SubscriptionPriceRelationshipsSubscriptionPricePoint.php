<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceRelationshipsSubscriptionPricePoint
 */
class SubscriptionPriceRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionPriceRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
