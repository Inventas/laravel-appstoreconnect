<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingSessionsV1metricResponseDataItemDataPointsItemValues
 */
class GameCenterMatchmakingSessionsV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $count = new Optional,
        public int|float|Optional $averagePlayerCount = new Optional,
        #[MapName('p50PlayerCount')]
        public int|float|Optional $p50playerCount = new Optional,
        #[MapName('p95PlayerCount')]
        public int|float|Optional $p95playerCount = new Optional,
    ) {}
}
