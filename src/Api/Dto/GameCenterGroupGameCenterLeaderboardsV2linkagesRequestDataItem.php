<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterLeaderboardsV2linkagesRequestDataItem
 */
class GameCenterGroupGameCenterLeaderboardsV2linkagesRequestDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
