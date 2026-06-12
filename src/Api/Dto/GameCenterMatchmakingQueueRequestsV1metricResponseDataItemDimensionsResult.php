<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsResult
 */
class GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsResult extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsResultLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
