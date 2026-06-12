<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardActivityLinkageRequest
 */
class GameCenterLeaderboardActivityLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardActivityLinkageRequestData $data,
    ) {}
}
