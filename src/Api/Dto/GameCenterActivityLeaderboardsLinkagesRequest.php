<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLeaderboardsLinkagesRequest
 */
class GameCenterActivityLeaderboardsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityLeaderboardsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterActivityLeaderboardsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
