<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItem
 */
class GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
