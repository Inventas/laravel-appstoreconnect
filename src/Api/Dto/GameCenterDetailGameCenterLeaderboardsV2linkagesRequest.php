<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterLeaderboardsV2linkagesRequest
 */
class GameCenterDetailGameCenterLeaderboardsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
