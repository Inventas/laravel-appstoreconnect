<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterPlayerAchievementSubmissionCreateRequest
 */
class GameCenterPlayerAchievementSubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterPlayerAchievementSubmissionCreateRequestData $data,
    ) {}
}
