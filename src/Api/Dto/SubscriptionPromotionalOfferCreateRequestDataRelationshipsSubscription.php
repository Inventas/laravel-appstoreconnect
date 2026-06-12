<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPromotionalOfferCreateRequestDataRelationshipsSubscription
 */
class SubscriptionPromotionalOfferCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
