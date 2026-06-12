<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingSessionsV1metricResponseDataItem
 */
class GameCenterMatchmakingSessionsV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingSessionsV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingSessionsV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
