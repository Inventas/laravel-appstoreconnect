<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageCreateRequestDataRelationships
 */
class GameCenterLeaderboardImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageCreateRequestDataRelationshipsGameCenterLeaderboardLocalization $gameCenterLeaderboardLocalization,
    ) {}
}
