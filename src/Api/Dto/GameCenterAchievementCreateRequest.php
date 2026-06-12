<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementCreateRequest
 */
class GameCenterAchievementCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementCreateRequestData $data,
    ) {}
}
