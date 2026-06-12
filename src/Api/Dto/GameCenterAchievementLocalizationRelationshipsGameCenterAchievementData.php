<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationRelationshipsGameCenterAchievementData
 */
class GameCenterAchievementLocalizationRelationshipsGameCenterAchievementData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
