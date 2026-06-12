<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageRelationshipsGameCenterLeaderboardLocalization
 */
class GameCenterLeaderboardImageRelationshipsGameCenterLeaderboardLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageRelationshipsGameCenterLeaderboardLocalizationData|Optional $data = new Optional,
    ) {}
}
