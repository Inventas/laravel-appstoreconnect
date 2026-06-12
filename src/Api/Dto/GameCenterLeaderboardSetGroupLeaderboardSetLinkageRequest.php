<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest
 */
class GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequestData $data,
    ) {}
}
