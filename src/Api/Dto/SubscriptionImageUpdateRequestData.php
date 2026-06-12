<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImageUpdateRequestData
 */
class SubscriptionImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
