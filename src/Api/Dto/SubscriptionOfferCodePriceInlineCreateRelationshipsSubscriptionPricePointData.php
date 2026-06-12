<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodePriceInlineCreateRelationshipsSubscriptionPricePointData
 */
class SubscriptionOfferCodePriceInlineCreateRelationshipsSubscriptionPricePointData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
