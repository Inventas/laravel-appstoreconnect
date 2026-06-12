<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensionsResultLinks
 */
class GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensionsResultLinks extends SpatieData
{
    public function __construct(
        public string|Optional $groupBy = new Optional,
    ) {}
}
