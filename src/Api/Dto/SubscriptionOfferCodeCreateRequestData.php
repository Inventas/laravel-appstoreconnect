<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCreateRequestData
 */
class SubscriptionOfferCodeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionOfferCodeCreateRequestDataAttributes $attributes,
        public SubscriptionOfferCodeCreateRequestDataRelationships $relationships,
    ) {}
}
