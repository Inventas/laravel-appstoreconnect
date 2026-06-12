<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferRelationshipsSubscription
 */
class SubscriptionPromotionalOfferRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionPromotionalOfferRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
