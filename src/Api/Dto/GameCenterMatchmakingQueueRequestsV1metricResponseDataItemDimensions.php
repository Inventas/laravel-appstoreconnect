<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensions
 */
class GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsResult|Optional $result = new Optional,
        public GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsGameCenterDetail|Optional $gameCenterDetail = new Optional,
    ) {}
}
