<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementVersionV2CreateRequest
 */
class GameCenterAchievementVersionV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2createRequestData $data,
    ) {}
}
