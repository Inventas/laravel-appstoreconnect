<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItemValues
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $count = new Optional,
        public int|float|Optional $averageResult = new Optional,
        #[MapName('p50Result')]
        public int|float|Optional $p50result = new Optional,
        #[MapName('p95Result')]
        public int|float|Optional $p95result = new Optional,
    ) {}
}
