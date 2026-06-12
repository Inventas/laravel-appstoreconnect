<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeUpdateRequestDataRelationshipsLeaderboard
 */
class GameCenterChallengeUpdateRequestDataRelationshipsLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardData|Optional $data = new Optional,
    ) {}
}
