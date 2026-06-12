<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItem
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
