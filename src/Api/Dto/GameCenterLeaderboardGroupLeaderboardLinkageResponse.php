<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardGroupLeaderboardLinkageResponse
 */
class GameCenterLeaderboardGroupLeaderboardLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardGroupLeaderboardLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
