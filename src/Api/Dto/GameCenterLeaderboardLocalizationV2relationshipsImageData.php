<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2relationshipsImageData
 */
class GameCenterLeaderboardLocalizationV2relationshipsImageData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
