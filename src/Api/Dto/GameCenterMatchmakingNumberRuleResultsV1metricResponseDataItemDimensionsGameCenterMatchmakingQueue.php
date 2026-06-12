<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
