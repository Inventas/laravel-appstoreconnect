<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageRelationshipsGameCenterLeaderboardSetLocalization
 */
class GameCenterLeaderboardSetImageRelationshipsGameCenterLeaderboardSetLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageRelationshipsGameCenterLeaderboardSetLocalizationData|Optional $data = new Optional,
    ) {}
}
