<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2relationships
 */
class GameCenterLeaderboardLocalizationV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2relationshipsVersion|Optional $version = new Optional,
        public GameCenterLeaderboardLocalizationV2relationshipsImage|Optional $image = new Optional,
    ) {}
}
