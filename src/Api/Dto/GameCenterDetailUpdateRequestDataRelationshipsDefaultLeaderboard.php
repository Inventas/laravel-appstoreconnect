<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboard
 */
class GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardData|Optional $data = new Optional,
    ) {}
}
