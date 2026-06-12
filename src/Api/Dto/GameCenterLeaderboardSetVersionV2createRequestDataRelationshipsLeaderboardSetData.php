<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetVersionV2createRequestDataRelationshipsLeaderboardSetData
 */
class GameCenterLeaderboardSetVersionV2createRequestDataRelationshipsLeaderboardSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
