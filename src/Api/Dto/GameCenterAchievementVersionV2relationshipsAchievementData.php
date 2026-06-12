<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementVersionV2relationshipsAchievementData
 */
class GameCenterAchievementVersionV2relationshipsAchievementData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
