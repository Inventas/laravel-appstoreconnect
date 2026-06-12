<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionLocalizationUpdateRequestData
 */
class SubscriptionLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
