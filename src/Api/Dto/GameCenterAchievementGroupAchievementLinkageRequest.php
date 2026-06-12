<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementGroupAchievementLinkageRequest
 */
class GameCenterAchievementGroupAchievementLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementGroupAchievementLinkageRequestData $data,
    ) {}
}
