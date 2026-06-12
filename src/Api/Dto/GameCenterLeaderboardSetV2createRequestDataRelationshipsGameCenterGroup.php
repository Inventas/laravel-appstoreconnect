<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterGroup
 */
class GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
