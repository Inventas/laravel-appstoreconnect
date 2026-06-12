<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsDefaultGroupLeaderboard
 */
class GameCenterDetailRelationshipsDefaultGroupLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterDetailRelationshipsDefaultGroupLeaderboardData|Optional $data = new Optional,
    ) {}
}
