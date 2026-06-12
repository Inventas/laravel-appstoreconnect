<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequestData
 */
class SubscriptionUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public SubscriptionUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
