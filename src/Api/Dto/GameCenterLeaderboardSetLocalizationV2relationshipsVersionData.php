<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2relationshipsVersionData
 */
class GameCenterLeaderboardSetLocalizationV2relationshipsVersionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
