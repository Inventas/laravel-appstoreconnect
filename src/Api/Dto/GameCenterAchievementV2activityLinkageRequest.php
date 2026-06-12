<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementV2activityLinkageRequest
 */
class GameCenterAchievementV2activityLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2activityLinkageRequestData $data,
    ) {}
}
