<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardV2
 */
class GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardV2 extends SpatieData
{
    public function __construct(
        public GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
