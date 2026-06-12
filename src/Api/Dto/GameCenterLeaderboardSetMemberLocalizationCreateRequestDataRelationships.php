<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationships
 */
class GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationshipsGameCenterLeaderboardSet $gameCenterLeaderboardSet,
        public GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationshipsGameCenterLeaderboard $gameCenterLeaderboard,
    ) {}
}
