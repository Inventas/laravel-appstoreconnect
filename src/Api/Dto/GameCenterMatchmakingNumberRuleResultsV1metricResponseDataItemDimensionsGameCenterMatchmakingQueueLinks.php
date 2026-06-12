<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
        public string|Optional $related = new Optional,
    ) {}
}
