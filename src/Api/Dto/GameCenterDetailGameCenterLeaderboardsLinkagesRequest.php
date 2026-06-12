<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterLeaderboardsLinkagesRequest
 */
class GameCenterDetailGameCenterLeaderboardsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
