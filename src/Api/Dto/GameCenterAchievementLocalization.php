<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalization
 */
class GameCenterAchievementLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementLocalizationAttributes|Optional $attributes = new Optional,
        public GameCenterAchievementLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
