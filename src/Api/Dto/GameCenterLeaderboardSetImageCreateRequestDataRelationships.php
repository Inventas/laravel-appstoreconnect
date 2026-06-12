<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageCreateRequestDataRelationships
 */
class GameCenterLeaderboardSetImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageCreateRequestDataRelationshipsGameCenterLeaderboardSetLocalization $gameCenterLeaderboardSetLocalization,
    ) {}
}
