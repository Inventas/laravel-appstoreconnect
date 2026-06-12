<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterLeaderboardsV2linkagesRequestDataItem
 */
class GameCenterDetailGameCenterLeaderboardsV2linkagesRequestDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
