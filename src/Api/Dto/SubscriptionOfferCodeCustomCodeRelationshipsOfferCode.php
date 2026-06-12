<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeCustomCodeRelationshipsOfferCode
 */
class SubscriptionOfferCodeCustomCodeRelationshipsOfferCode extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCustomCodeRelationshipsOfferCodeData|Optional $data = new Optional,
    ) {}
}
