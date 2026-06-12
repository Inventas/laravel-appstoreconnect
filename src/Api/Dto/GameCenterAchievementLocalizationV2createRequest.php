<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2CreateRequest
 */
class GameCenterAchievementLocalizationV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2createRequestData $data,
    ) {}
}
