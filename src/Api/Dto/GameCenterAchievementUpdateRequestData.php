<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementUpdateRequestData
 */
class GameCenterAchievementUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
