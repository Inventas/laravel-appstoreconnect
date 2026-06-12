<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeUpdateRequestDataRelationships
 */
class GameCenterChallengeUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeUpdateRequestDataRelationshipsLeaderboard|Optional $leaderboard = new Optional,
        public GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardV2|Optional $leaderboardV2 = new Optional,
    ) {}
}
