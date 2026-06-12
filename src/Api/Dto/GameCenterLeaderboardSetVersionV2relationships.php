<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2relationships
 */
class GameCenterLeaderboardSetVersionV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2relationshipsLeaderboardSet|Optional $leaderboardSet = new Optional,
        public GameCenterLeaderboardSetVersionV2relationshipsLocalizations|Optional $localizations = new Optional,
    ) {}
}
