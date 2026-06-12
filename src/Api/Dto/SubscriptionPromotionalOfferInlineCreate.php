<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferInlineCreate
 */
class SubscriptionPromotionalOfferInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionPromotionalOfferInlineCreateAttributes $attributes,
        public string|Optional $id = new Optional,
        public SubscriptionPromotionalOfferInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
