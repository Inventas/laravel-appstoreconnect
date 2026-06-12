<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationshipsGameCenterGroup
 */
class GameCenterLeaderboardV2relationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2relationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
