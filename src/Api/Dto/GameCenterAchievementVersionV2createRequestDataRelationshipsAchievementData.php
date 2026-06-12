<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementVersionV2createRequestDataRelationshipsAchievementData
 */
class GameCenterAchievementVersionV2createRequestDataRelationshipsAchievementData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
