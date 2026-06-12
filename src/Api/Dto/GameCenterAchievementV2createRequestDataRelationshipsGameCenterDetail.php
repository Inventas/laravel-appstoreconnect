<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2createRequestDataRelationshipsGameCenterDetail
 */
class GameCenterAchievementV2createRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterAchievementV2createRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
