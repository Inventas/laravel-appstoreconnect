<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingAppRequestsV1metricResponseDataItem
 */
class GameCenterMatchmakingAppRequestsV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingAppRequestsV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingAppRequestsV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
