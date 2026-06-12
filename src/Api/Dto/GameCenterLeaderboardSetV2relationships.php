<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2relationships
 */
class GameCenterLeaderboardSetV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2relationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardSetV2relationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardSetV2relationshipsGameCenterLeaderboards|Optional $gameCenterLeaderboards = new Optional,
        public GameCenterLeaderboardSetV2relationshipsVersions|Optional $versions = new Optional,
    ) {}
}
