<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataRelationships
 */
class GameCenterChallengeCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeCreateRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterChallengeCreateRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterChallengeCreateRequestDataRelationshipsVersions|Optional $versions = new Optional,
        public GameCenterChallengeCreateRequestDataRelationshipsLeaderboard|Optional $leaderboard = new Optional,
        public GameCenterChallengeCreateRequestDataRelationshipsLeaderboardV2|Optional $leaderboardV2 = new Optional,
    ) {}
}
