<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroup
 */
class SubscriptionGroup extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionGroupAttributes|Optional $attributes = new Optional,
        public SubscriptionGroupRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
