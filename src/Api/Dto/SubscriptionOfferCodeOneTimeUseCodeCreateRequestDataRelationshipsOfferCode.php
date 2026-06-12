<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCode
 */
class SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCode extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCodeData $data,
    ) {}
}
