<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleErrorsV1metricResponseDataItem
 */
class GameCenterMatchmakingRuleErrorsV1metricResponseDataItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDataPointsItem>|Optional  $dataPoints
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDataPointsItem>|Optional */
        public array|Optional $dataPoints = new Optional,
        public GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensions|Optional $dimensions = new Optional,
        public string|Optional $granularity = new Optional,
    ) {}
}
