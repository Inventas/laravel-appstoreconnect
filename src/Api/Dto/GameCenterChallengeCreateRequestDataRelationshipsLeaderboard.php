<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataRelationshipsLeaderboard
 */
class GameCenterChallengeCreateRequestDataRelationshipsLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterChallengeCreateRequestDataRelationshipsLeaderboardData|Optional $data = new Optional,
    ) {}
}
