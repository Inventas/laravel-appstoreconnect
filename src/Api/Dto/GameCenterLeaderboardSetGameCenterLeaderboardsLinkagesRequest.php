<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest
 */
class GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
