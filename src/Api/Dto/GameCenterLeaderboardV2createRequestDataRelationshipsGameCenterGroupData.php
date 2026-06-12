<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterGroupData
 */
class GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterGroupData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
