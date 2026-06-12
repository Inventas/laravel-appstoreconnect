<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationCreateRequestDataRelationships
 */
class GameCenterLeaderboardLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationCreateRequestDataRelationshipsGameCenterLeaderboard $gameCenterLeaderboard,
    ) {}
}
