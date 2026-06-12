<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2updateRequestData
 */
class GameCenterAchievementV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
