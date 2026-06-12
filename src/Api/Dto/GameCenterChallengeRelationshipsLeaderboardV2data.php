<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeRelationshipsLeaderboardV2data
 */
class GameCenterChallengeRelationshipsLeaderboardV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
