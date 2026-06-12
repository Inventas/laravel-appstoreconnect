<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLeaderboardLinkageRequest
 */
class GameCenterChallengeLeaderboardLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLeaderboardLinkageRequestData $data,
    ) {}
}
