<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensions
 */
class GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensions extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingAppRequestsV1metricResponseDataItemDimensionsResult|Optional $result = new Optional,
    ) {}
}
