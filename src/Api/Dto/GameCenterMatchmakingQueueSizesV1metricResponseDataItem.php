<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueSizesV1metricResponseDataItem
 */
class GameCenterMatchmakingQueueSizesV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingQueueSizesV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingQueueSizesV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
