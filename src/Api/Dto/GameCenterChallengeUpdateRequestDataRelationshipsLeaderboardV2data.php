<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardV2data
 */
class GameCenterChallengeUpdateRequestDataRelationshipsLeaderboardV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
