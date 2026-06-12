<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImage
 */
class SubscriptionImage extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionImageAttributes|Optional $attributes = new Optional,
        public SubscriptionImageRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
