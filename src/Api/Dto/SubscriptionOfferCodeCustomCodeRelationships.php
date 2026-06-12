<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeCustomCodeRelationships
 */
class SubscriptionOfferCodeCustomCodeRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCustomCodeRelationshipsOfferCode|Optional $offerCode = new Optional,
    ) {}
}
