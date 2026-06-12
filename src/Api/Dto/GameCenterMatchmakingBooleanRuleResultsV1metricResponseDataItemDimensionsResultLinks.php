<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsResultLinks
 */
class GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsResultLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
    ) {}
}
