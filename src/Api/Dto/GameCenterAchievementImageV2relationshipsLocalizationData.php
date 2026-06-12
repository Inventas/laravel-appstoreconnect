<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2relationshipsLocalizationData
 */
class GameCenterAchievementImageV2relationshipsLocalizationData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
