<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceInlineCreate
 */
class SubscriptionPriceInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public SubscriptionPriceInlineCreateAttributes|Optional $attributes = new Optional,
        public SubscriptionPriceInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
