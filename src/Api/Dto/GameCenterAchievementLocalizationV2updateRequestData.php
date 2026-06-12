<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2updateRequestData
 */
class GameCenterAchievementLocalizationV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementLocalizationV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
