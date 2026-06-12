<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsResultLinks
 */
class GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsResultLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
    ) {}
}
