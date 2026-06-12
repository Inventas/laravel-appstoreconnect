<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterPlayerAchievementSubmissionCreateRequestData
 */
class GameCenterPlayerAchievementSubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterPlayerAchievementSubmissionCreateRequestDataAttributes $attributes,
    ) {}
}
