<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCodeRelationships
 */
class SubscriptionOfferCodeOneTimeUseCodeRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeRelationshipsOfferCode|Optional $offerCode = new Optional,
        public SubscriptionOfferCodeOneTimeUseCodeRelationshipsValues|Optional $values = new Optional,
    ) {}
}
