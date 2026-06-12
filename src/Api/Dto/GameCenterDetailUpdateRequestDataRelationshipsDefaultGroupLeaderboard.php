<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboard
 */
class GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardData|Optional $data = new Optional,
    ) {}
}
