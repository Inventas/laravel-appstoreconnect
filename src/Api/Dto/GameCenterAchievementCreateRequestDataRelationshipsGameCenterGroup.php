<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementCreateRequestDataRelationshipsGameCenterGroup
 */
class GameCenterAchievementCreateRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterAchievementCreateRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
