<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementRelease
 */
class GameCenterAchievementRelease extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementReleaseAttributes|Optional $attributes = new Optional,
        public GameCenterAchievementReleaseRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
