<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterAchievementCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterAchievementCreateRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
