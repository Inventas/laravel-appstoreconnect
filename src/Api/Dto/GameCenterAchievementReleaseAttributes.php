<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleaseAttributes
 */
class GameCenterAchievementReleaseAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $live = new Optional,
    ) {}
}
