<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueSizesV1metricResponseDataItemDataPointsItemValues
 */
class GameCenterMatchmakingQueueSizesV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $count = new Optional,
        public int|float|Optional $averageNumberOfRequests = new Optional,
        #[MapName('p50NumberOfRequests')]
        public int|float|Optional $p50numberOfRequests = new Optional,
        #[MapName('p95NumberOfRequests')]
        public int|float|Optional $p95numberOfRequests = new Optional,
    ) {}
}
