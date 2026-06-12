<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestDataRelationshipsLeaderboardV2
 */
class GameCenterChallengeCreateRequestDataRelationshipsLeaderboardV2 extends SpatieData
{
    public function __construct(
        public GameCenterChallengeCreateRequestDataRelationshipsLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
