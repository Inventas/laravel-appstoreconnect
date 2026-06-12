<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterGroup
 */
class GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
