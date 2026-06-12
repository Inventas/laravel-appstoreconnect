<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPromotionalOfferCreateRequestData
 */
class SubscriptionPromotionalOfferCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionPromotionalOfferCreateRequestDataAttributes $attributes,
        public SubscriptionPromotionalOfferCreateRequestDataRelationships $relationships,
    ) {}
}
