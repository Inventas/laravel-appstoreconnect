<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterDetailData $data,
    ) {}
}
