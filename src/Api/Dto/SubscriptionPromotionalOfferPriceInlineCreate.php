<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPriceInlineCreate
 */
class SubscriptionPromotionalOfferPriceInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public SubscriptionPromotionalOfferPriceInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
