<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2relationships
 */
class GameCenterLeaderboardSetLocalizationV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2relationshipsVersion|Optional $version = new Optional,
        public GameCenterLeaderboardSetLocalizationV2relationshipsImage|Optional $image = new Optional,
    ) {}
}
