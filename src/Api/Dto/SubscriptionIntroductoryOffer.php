<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOffer
 */
class SubscriptionIntroductoryOffer extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionIntroductoryOfferAttributes|Optional $attributes = new Optional,
        public SubscriptionIntroductoryOfferRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
