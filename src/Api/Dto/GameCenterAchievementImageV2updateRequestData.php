<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageV2updateRequestData
 */
class GameCenterAchievementImageV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementImageV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
