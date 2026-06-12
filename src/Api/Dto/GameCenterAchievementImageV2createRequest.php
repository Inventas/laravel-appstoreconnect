<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2CreateRequest
 */
class GameCenterAchievementImageV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageV2createRequestData $data,
    ) {}
}
