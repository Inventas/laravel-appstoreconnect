<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGracePeriodUpdateRequestData
 */
class SubscriptionGracePeriodUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionGracePeriodUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
