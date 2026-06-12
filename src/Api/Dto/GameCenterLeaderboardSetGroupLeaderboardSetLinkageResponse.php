<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetGroupLeaderboardSetLinkageResponse
 */
class GameCenterLeaderboardSetGroupLeaderboardSetLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetGroupLeaderboardSetLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
