<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeCreateRequestData
 */
class SubscriptionOfferCodeOneTimeUseCodeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataAttributes $attributes,
        public SubscriptionOfferCodeOneTimeUseCodeCreateRequestDataRelationships $relationships,
    ) {}
}
