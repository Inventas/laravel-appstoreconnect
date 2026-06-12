<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensions
 */
class GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue|Optional $gameCenterMatchmakingQueue = new Optional,
    ) {}
}
