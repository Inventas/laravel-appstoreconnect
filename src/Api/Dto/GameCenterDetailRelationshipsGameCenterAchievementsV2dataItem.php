<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailRelationshipsGameCenterAchievementsV2dataItem
 */
class GameCenterDetailRelationshipsGameCenterAchievementsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
