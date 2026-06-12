<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterAchievementsV2linkagesRequestDataItem
 */
class GameCenterDetailGameCenterAchievementsV2linkagesRequestDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
