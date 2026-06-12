<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetRelationships
 */
class GameCenterLeaderboardSetRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardSetRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardSetRelationshipsGroupLeaderboardSet|Optional $groupLeaderboardSet = new Optional,
        public GameCenterLeaderboardSetRelationshipsLocalizations|Optional $localizations = new Optional,
        public GameCenterLeaderboardSetRelationshipsGameCenterLeaderboards|Optional $gameCenterLeaderboards = new Optional,
        public GameCenterLeaderboardSetRelationshipsReleases|Optional $releases = new Optional,
    ) {}
}
