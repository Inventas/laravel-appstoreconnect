<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPrice
 */
class SubscriptionPrice extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionPriceAttributes|Optional $attributes = new Optional,
        public SubscriptionPriceRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
