<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2
 */
class GameCenterAchievementV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementV2attributes|Optional $attributes = new Optional,
        public GameCenterAchievementV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
