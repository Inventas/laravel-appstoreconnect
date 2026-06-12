<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionLocalizationUpdateRequest
 */
class SubscriptionLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionLocalizationUpdateRequestData $data,
    ) {}
}
