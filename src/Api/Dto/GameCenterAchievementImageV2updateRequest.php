<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2UpdateRequest
 */
class GameCenterAchievementImageV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageV2updateRequestData $data,
    ) {}
}
