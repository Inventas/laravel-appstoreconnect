<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionIntroductoryOfferCreateRequestData
 */
class SubscriptionIntroductoryOfferCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionIntroductoryOfferCreateRequestDataAttributes $attributes,
        public SubscriptionIntroductoryOfferCreateRequestDataRelationships $relationships,
    ) {}
}
