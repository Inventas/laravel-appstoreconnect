<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupLocalizationUpdateRequestData
 */
class SubscriptionGroupLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionGroupLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
