<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingAppRequestsV1metricResponseDataItemDataPointsItemValues
 */
class GameCenterMatchmakingAppRequestsV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $count = new Optional,
        public int|float|Optional $averageSecondsInQueue = new Optional,
        #[MapName('p50SecondsInQueue')]
        public int|float|Optional $p50secondsInQueue = new Optional,
        #[MapName('p95SecondsInQueue')]
        public int|float|Optional $p95secondsInQueue = new Optional,
    ) {}
}
