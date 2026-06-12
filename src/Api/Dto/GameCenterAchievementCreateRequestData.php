<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementCreateRequestData
 */
class GameCenterAchievementCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementCreateRequestDataAttributes $attributes,
        public GameCenterAchievementCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
