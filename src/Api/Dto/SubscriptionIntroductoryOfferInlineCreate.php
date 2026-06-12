<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferInlineCreate
 */
class SubscriptionIntroductoryOfferInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionIntroductoryOfferInlineCreateAttributes $attributes,
        public string|Optional $id = new Optional,
        public SubscriptionIntroductoryOfferInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
