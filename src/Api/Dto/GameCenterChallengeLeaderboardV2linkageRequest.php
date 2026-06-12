<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLeaderboardV2linkageRequest
 */
class GameCenterChallengeLeaderboardV2linkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLeaderboardV2linkageRequestData $data,
    ) {}
}
