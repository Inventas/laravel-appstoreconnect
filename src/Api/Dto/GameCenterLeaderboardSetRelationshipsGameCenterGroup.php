<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetRelationshipsGameCenterGroup
 */
class GameCenterLeaderboardSetRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
