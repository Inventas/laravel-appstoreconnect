<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2relationshipsImageData
 */
class GameCenterLeaderboardSetLocalizationV2relationshipsImageData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
