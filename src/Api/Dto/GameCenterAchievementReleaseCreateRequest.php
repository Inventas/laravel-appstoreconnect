<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementReleaseCreateRequest
 */
class GameCenterAchievementReleaseCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseCreateRequestData $data,
    ) {}
}
