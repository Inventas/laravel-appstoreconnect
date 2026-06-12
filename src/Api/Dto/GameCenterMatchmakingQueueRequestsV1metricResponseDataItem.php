<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRequestsV1metricResponseDataItem
 */
class GameCenterMatchmakingQueueRequestsV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
