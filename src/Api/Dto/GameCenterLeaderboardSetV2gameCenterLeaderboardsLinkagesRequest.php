<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest
 */
class GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
