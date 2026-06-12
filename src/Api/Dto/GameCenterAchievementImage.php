<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImage
 */
class GameCenterAchievementImage extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementImageAttributes|Optional $attributes = new Optional,
        public GameCenterAchievementImageRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
