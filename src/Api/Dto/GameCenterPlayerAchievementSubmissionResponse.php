<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterPlayerAchievementSubmissionResponse
 */
class GameCenterPlayerAchievementSubmissionResponse extends SpatieData
{
    public function __construct(
        public GameCenterPlayerAchievementSubmission $data,
        public DocumentLinks $links,
    ) {}
}
