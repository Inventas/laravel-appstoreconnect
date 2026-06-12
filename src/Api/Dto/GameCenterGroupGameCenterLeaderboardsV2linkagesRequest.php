<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterLeaderboardsV2linkagesRequest
 */
class GameCenterGroupGameCenterLeaderboardsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
