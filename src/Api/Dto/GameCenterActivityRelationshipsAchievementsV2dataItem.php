<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityRelationshipsAchievementsV2dataItem
 */
class GameCenterActivityRelationshipsAchievementsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
