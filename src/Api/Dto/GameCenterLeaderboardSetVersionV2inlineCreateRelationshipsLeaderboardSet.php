<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2inlineCreateRelationshipsLeaderboardSet
 */
class GameCenterLeaderboardSetVersionV2inlineCreateRelationshipsLeaderboardSet extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2inlineCreateRelationshipsLeaderboardSetData|Optional $data = new Optional,
    ) {}
}
