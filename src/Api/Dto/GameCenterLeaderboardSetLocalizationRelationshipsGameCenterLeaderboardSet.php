<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSet
 */
class GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSet extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSetData|Optional $data = new Optional,
    ) {}
}
