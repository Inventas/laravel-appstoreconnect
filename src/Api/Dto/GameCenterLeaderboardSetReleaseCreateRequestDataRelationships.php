<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetReleaseCreateRequestDataRelationships
 */
class GameCenterLeaderboardSetReleaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterDetail $gameCenterDetail,
        public GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterLeaderboardSet $gameCenterLeaderboardSet,
    ) {}
}
