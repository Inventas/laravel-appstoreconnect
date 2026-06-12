<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementRelationshipsGameCenterDetail
 */
class GameCenterAchievementRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterAchievementRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
