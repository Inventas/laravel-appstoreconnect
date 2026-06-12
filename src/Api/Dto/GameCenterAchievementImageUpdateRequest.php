<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageUpdateRequest
 */
class GameCenterAchievementImageUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageUpdateRequestData $data,
    ) {}
}
