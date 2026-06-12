<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLeaderboardsV2linkagesRequest
 */
class GameCenterActivityLeaderboardsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityLeaderboardsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterActivityLeaderboardsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
