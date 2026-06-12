<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementV2UpdateRequest
 */
class GameCenterAchievementV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2updateRequestData $data,
    ) {}
}
