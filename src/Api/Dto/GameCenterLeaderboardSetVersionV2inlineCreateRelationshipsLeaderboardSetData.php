<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetVersionV2inlineCreateRelationshipsLeaderboardSetData
 */
class GameCenterLeaderboardSetVersionV2inlineCreateRelationshipsLeaderboardSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
