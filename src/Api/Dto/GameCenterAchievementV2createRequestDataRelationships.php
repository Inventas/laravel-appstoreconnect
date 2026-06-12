<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2createRequestDataRelationships
 */
class GameCenterAchievementV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2createRequestDataRelationshipsVersions $versions,
        public GameCenterAchievementV2createRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterAchievementV2createRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
    ) {}
}
