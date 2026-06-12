<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationRelationshipsGameCenterAchievement
 */
class GameCenterAchievementLocalizationRelationshipsGameCenterAchievement extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterAchievementLocalizationRelationshipsGameCenterAchievementData|Optional $data = new Optional,
    ) {}
}
