<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationships
 */
class SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCode $offerCode,
    ) {}
}
