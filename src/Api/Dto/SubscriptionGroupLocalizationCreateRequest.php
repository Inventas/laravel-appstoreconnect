<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupLocalizationCreateRequest
 */
class SubscriptionGroupLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionGroupLocalizationCreateRequestData $data,
    ) {}
}
