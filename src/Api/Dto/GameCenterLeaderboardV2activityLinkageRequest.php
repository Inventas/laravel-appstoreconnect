<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2activityLinkageRequest
 */
class GameCenterLeaderboardV2activityLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2activityLinkageRequestData $data,
    ) {}
}
