<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeRelationships
 */
class SubscriptionOfferCodeRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeRelationshipsSubscription|Optional $subscription = new Optional,
        public SubscriptionOfferCodeRelationshipsOneTimeUseCodes|Optional $oneTimeUseCodes = new Optional,
        public SubscriptionOfferCodeRelationshipsCustomCodes|Optional $customCodes = new Optional,
        public SubscriptionOfferCodeRelationshipsPrices|Optional $prices = new Optional,
    ) {}
}
