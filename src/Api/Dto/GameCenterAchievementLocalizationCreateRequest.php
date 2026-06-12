<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationCreateRequest
 */
class GameCenterAchievementLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationCreateRequestData $data,
    ) {}
}
