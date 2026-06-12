<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementVersionV2createRequestDataRelationships
 */
class GameCenterAchievementVersionV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2createRequestDataRelationshipsAchievement $achievement,
    ) {}
}
