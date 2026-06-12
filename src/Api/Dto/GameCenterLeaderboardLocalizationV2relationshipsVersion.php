<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2relationshipsVersion
 */
class GameCenterLeaderboardLocalizationV2relationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2relationshipsVersionData|Optional $data = new Optional,
    ) {}
}
