<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue
 */
class GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueue extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDimensionsGameCenterMatchmakingQueueLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
