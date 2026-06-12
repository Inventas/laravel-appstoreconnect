<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageRelationshipsGameCenterAchievementLocalization
 */
class GameCenterAchievementImageRelationshipsGameCenterAchievementLocalization extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageRelationshipsGameCenterAchievementLocalizationData|Optional $data = new Optional,
    ) {}
}
