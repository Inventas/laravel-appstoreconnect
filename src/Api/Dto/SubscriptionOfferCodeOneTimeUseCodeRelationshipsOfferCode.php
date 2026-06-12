<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCodeRelationshipsOfferCode
 */
class SubscriptionOfferCodeOneTimeUseCodeRelationshipsOfferCode extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeRelationshipsOfferCodeData|Optional $data = new Optional,
    ) {}
}
