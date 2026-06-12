<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPriceCreateRequestDataRelationshipsSubscriptionPricePoint
 */
class SubscriptionPriceCreateRequestDataRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionPriceCreateRequestDataRelationshipsSubscriptionPricePointData $data,
    ) {}
}
