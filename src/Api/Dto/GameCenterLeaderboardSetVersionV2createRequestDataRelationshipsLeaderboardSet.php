<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetVersionV2createRequestDataRelationshipsLeaderboardSet
 */
class GameCenterLeaderboardSetVersionV2createRequestDataRelationshipsLeaderboardSet extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2createRequestDataRelationshipsLeaderboardSetData $data,
    ) {}
}
