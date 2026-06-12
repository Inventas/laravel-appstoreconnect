<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2relationshipsGameCenterDetail
 */
class GameCenterAchievementV2relationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2relationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
