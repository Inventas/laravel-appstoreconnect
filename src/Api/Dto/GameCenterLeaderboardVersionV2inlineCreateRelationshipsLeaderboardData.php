<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardVersionV2inlineCreateRelationshipsLeaderboardData
 */
class GameCenterLeaderboardVersionV2inlineCreateRelationshipsLeaderboardData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
