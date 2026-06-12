<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageV2relationshipsLocalization
 */
class GameCenterLeaderboardImageV2relationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageV2relationshipsLocalizationData|Optional $data = new Optional,
    ) {}
}
