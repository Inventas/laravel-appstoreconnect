<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCodeUpdateRequestData
 */
class SubscriptionOfferCodeOneTimeUseCodeUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionOfferCodeOneTimeUseCodeUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
