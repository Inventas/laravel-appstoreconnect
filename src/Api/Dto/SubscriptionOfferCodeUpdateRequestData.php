<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeUpdateRequestData
 */
class SubscriptionOfferCodeUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionOfferCodeUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
