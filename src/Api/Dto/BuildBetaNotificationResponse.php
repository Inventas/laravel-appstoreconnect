<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaNotificationResponse
 */
class BuildBetaNotificationResponse extends SpatieData
{
    public function __construct(
        public BuildBetaNotification $data,
        public DocumentLinks $links,
    ) {}
}
