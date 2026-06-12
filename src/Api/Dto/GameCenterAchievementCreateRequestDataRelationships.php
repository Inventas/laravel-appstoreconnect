<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementCreateRequestDataRelationships
 */
class GameCenterAchievementCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementCreateRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterAchievementCreateRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
    ) {}
}
