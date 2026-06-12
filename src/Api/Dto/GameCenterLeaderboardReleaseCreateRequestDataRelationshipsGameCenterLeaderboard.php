<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterLeaderboard
 */
class GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterLeaderboardData $data,
    ) {}
}
