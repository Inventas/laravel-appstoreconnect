<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2relationshipsLeaderboardSet
 */
class GameCenterLeaderboardSetVersionV2relationshipsLeaderboardSet extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2relationshipsLeaderboardSetData|Optional $data = new Optional,
    ) {}
}
