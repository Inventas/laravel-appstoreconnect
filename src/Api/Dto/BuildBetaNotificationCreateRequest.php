<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaNotificationCreateRequest
 */
class BuildBetaNotificationCreateRequest extends SpatieData
{
    public function __construct(
        public BuildBetaNotificationCreateRequestData $data,
    ) {}
}
