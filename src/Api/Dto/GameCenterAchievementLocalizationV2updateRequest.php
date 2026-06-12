<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2UpdateRequest
 */
class GameCenterAchievementLocalizationV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2updateRequestData $data,
    ) {}
}
