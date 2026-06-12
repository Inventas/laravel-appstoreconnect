<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardChallengeLinkageRequest
 */
class GameCenterLeaderboardChallengeLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardChallengeLinkageRequestData $data,
    ) {}
}
