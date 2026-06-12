<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationCreateRequestDataRelationshipsGameCenterLeaderboard
 */
class GameCenterLeaderboardLocalizationCreateRequestDataRelationshipsGameCenterLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationCreateRequestDataRelationshipsGameCenterLeaderboardData $data,
    ) {}
}
