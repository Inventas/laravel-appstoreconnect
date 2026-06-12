<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionLocalizationCreateRequest
 */
class SubscriptionLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionLocalizationCreateRequestData $data,
    ) {}
}
