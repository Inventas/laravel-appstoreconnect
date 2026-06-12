<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterGroup
 */
class GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
