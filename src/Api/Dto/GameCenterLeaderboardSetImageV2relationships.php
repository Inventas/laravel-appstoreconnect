<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageV2relationships
 */
class GameCenterLeaderboardSetImageV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageV2relationshipsLocalization|Optional $localization = new Optional,
    ) {}
}
