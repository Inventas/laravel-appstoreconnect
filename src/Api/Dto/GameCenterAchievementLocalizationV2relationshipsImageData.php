<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2relationshipsImageData
 */
class GameCenterAchievementLocalizationV2relationshipsImageData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
