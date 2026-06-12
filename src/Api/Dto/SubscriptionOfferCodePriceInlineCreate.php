<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePriceInlineCreate
 */
class SubscriptionOfferCodePriceInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public SubscriptionOfferCodePriceInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
