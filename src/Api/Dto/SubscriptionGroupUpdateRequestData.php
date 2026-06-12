<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupUpdateRequestData
 */
class SubscriptionGroupUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionGroupUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
