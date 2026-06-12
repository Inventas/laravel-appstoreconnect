<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboardsDataItem
 */
class GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboardsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
