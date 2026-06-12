<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue
 */
class GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingBooleanRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
