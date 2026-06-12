<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2relationshipsGameCenterGroup
 */
class GameCenterLeaderboardSetV2relationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2relationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
