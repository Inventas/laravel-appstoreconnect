<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks
 */
class GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
        public string|Optional $related = new Optional,
    ) {}
}
