<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2relationshipsGameCenterGroup
 */
class GameCenterAchievementV2relationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2relationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
