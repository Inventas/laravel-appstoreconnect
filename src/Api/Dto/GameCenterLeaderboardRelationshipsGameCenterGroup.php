<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationshipsGameCenterGroup
 */
class GameCenterLeaderboardRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
