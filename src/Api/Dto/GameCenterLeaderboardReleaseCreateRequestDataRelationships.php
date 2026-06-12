<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardReleaseCreateRequestDataRelationships
 */
class GameCenterLeaderboardReleaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterDetail $gameCenterDetail,
        public GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterLeaderboard $gameCenterLeaderboard,
    ) {}
}
