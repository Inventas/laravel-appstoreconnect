<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensionsResult
 */
class GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensionsResult extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensionsResultLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
