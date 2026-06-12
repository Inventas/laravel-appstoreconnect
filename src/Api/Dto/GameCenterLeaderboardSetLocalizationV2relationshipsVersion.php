<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2relationshipsVersion
 */
class GameCenterLeaderboardSetLocalizationV2relationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2relationshipsVersionData|Optional $data = new Optional,
    ) {}
}
