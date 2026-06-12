<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageV2updateRequestDataAttributes
 */
class GameCenterAchievementImageV2updateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
