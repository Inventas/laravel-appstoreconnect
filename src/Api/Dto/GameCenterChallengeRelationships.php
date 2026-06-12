<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeRelationships
 */
class GameCenterChallengeRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterChallengeRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterChallengeRelationshipsVersions|Optional $versions = new Optional,
        public GameCenterChallengeRelationshipsLeaderboard|Optional $leaderboard = new Optional,
        public GameCenterChallengeRelationshipsLeaderboardV2|Optional $leaderboardV2 = new Optional,
    ) {}
}
