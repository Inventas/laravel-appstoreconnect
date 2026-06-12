<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupLocalizationUpdateRequest
 */
class SubscriptionGroupLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionGroupLocalizationUpdateRequestData $data,
    ) {}
}
