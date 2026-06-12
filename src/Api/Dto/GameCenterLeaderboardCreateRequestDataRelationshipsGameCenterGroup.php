<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterGroup
 */
class GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
