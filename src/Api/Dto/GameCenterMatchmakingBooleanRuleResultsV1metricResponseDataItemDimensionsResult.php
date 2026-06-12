<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsResult
 */
class GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsResult extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsResultLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
