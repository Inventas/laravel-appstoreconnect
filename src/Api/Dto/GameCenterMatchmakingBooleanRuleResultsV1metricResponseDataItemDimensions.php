<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensions
 */
class GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsResult|Optional $result = new Optional,
        public GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue|Optional $gameCenterMatchmakingQueue = new Optional,
    ) {}
}
