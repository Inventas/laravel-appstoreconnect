<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageV2relationshipsLocalization
 */
class GameCenterLeaderboardSetImageV2relationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageV2relationshipsLocalizationData|Optional $data = new Optional,
    ) {}
}
