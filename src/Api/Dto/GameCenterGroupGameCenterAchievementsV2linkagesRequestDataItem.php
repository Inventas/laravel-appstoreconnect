<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterAchievementsV2linkagesRequestDataItem
 */
class GameCenterGroupGameCenterAchievementsV2linkagesRequestDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
