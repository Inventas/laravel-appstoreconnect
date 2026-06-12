<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementVersionV2createRequestDataRelationshipsAchievement
 */
class GameCenterAchievementVersionV2createRequestDataRelationshipsAchievement extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2createRequestDataRelationshipsAchievementData $data,
    ) {}
}
