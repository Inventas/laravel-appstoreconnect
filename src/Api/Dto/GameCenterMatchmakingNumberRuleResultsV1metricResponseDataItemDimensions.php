<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensions
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue|Optional $gameCenterMatchmakingQueue = new Optional,
    ) {}
}
