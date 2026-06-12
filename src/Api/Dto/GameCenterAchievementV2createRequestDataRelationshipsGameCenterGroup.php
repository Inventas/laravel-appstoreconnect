<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2createRequestDataRelationshipsGameCenterGroup
 */
class GameCenterAchievementV2createRequestDataRelationshipsGameCenterGroup extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2createRequestDataRelationshipsGameCenterGroupData|Optional $data = new Optional,
    ) {}
}
