<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleaseRelationshipsGameCenterDetail
 */
class GameCenterAchievementReleaseRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
