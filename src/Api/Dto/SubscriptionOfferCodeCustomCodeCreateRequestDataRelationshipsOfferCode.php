<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeCustomCodeCreateRequestDataRelationshipsOfferCode
 */
class SubscriptionOfferCodeCustomCodeCreateRequestDataRelationshipsOfferCode extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeCustomCodeCreateRequestDataRelationshipsOfferCodeData $data,
    ) {}
}
