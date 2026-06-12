<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementV2relationshipsActivityData
 */
class GameCenterAchievementV2relationshipsActivityData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
