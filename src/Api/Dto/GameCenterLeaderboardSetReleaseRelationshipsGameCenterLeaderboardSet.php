<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleaseRelationshipsGameCenterLeaderboardSet
 */
class GameCenterLeaderboardSetReleaseRelationshipsGameCenterLeaderboardSet extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseRelationshipsGameCenterLeaderboardSetData|Optional $data = new Optional,
    ) {}
}
