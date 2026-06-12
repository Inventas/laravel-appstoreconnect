<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePoint
 */
class SubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionPricePointAttributes|Optional $attributes = new Optional,
        public SubscriptionPricePointRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
