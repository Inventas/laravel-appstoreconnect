<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterLeaderboardsLinkagesRequest
 */
class GameCenterGroupGameCenterLeaderboardsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
