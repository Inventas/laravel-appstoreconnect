<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2
 */
class GameCenterAchievementLocalizationV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementLocalizationV2attributes|Optional $attributes = new Optional,
        public GameCenterAchievementLocalizationV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
