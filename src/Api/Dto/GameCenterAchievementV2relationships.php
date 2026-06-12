<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2relationships
 */
class GameCenterAchievementV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2relationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterAchievementV2relationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterAchievementV2relationshipsActivity|Optional $activity = new Optional,
        public GameCenterAchievementV2relationshipsVersions|Optional $versions = new Optional,
    ) {}
}
