<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardGroupLeaderboardLinkageRequest
 */
class GameCenterLeaderboardGroupLeaderboardLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardGroupLeaderboardLinkageRequestData $data,
    ) {}
}
