<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsGameCenterDetail
 */
class GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueRequestsV1metricResponseDataItemDimensionsGameCenterDetailLinks|Optional $links = new Optional,
        public string|Optional $data = new Optional,
    ) {}
}
