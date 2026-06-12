<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationCreateRequestDataRelationships
 */
class GameCenterLeaderboardSetLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationCreateRequestDataRelationshipsGameCenterLeaderboardSet $gameCenterLeaderboardSet,
    ) {}
}
