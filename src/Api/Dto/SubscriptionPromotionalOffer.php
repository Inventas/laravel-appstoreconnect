<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOffer
 */
class SubscriptionPromotionalOffer extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionPromotionalOfferAttributes|Optional $attributes = new Optional,
        public SubscriptionPromotionalOfferRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
