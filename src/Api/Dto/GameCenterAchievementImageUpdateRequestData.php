<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageUpdateRequestData
 */
class GameCenterAchievementImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
