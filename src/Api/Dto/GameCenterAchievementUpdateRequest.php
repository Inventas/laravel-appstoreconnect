<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementUpdateRequest
 */
class GameCenterAchievementUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementUpdateRequestData $data,
    ) {}
}
