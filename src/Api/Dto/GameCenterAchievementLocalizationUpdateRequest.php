<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationUpdateRequest
 */
class GameCenterAchievementLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationUpdateRequestData $data,
    ) {}
}
