<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievement
 */
class GameCenterAchievement extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementAttributes|Optional $attributes = new Optional,
        public GameCenterAchievementRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
