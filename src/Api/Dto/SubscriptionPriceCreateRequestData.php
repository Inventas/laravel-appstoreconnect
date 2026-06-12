<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceCreateRequestData
 */
class SubscriptionPriceCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionPriceCreateRequestDataRelationships $relationships,
        public SubscriptionPriceCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
