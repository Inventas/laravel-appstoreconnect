<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementReleaseCreateRequestData
 */
class GameCenterAchievementReleaseCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementReleaseCreateRequestDataRelationships $relationships,
    ) {}
}
