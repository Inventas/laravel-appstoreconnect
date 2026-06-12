<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationships
 */
class GameCenterLeaderboardRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardRelationshipsGroupLeaderboard|Optional $groupLeaderboard = new Optional,
        public GameCenterLeaderboardRelationshipsGameCenterLeaderboardSets|Optional $gameCenterLeaderboardSets = new Optional,
        public GameCenterLeaderboardRelationshipsLocalizations|Optional $localizations = new Optional,
        public GameCenterLeaderboardRelationshipsReleases|Optional $releases = new Optional,
        public GameCenterLeaderboardRelationshipsActivity|Optional $activity = new Optional,
        public GameCenterLeaderboardRelationshipsChallenge|Optional $challenge = new Optional,
    ) {}
}
