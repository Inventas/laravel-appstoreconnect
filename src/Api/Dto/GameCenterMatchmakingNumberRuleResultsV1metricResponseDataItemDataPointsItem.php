<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItem
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItem extends SpatieData
{
    public function __construct(
        public string|Optional $start = new Optional,
        public string|Optional $end = new Optional,
        public GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItemDataPointsItemValues|Optional $values = new Optional,
    ) {}
}
