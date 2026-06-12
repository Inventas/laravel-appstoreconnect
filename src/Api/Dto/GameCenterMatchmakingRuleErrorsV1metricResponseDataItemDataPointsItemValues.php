<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDataPointsItemValues
 */
class GameCenterMatchmakingRuleErrorsV1metricResponseDataItemDataPointsItemValues extends SpatieData
{
    public function __construct(
        public int|Optional $count = new Optional,
    ) {}
}
