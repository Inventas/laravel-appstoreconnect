<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2relationshipsChallengeData
 */
class GameCenterLeaderboardV2relationshipsChallengeData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
