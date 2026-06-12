<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCustomCodeCreateRequestData
 */
class SubscriptionOfferCodeCustomCodeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionOfferCodeCustomCodeCreateRequestDataAttributes $attributes,
        public SubscriptionOfferCodeCustomCodeCreateRequestDataRelationships $relationships,
    ) {}
}
