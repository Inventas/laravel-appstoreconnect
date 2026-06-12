<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageV2
 */
class GameCenterAchievementImageV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementImageV2attributes|Optional $attributes = new Optional,
        public GameCenterAchievementImageV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
