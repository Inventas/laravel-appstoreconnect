<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupRelationshipsGameCenterAchievementsV2dataItem
 */
class GameCenterGroupRelationshipsGameCenterAchievementsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
