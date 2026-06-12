<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterDetailData
 */
class GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterDetailData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
