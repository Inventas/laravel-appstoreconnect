<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageV2relationships
 */
class GameCenterLeaderboardImageV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageV2relationshipsLocalization|Optional $localization = new Optional,
    ) {}
}
