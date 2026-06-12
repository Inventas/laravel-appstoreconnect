<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageCreateRequest
 */
class GameCenterAchievementImageCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageCreateRequestData $data,
    ) {}
}
