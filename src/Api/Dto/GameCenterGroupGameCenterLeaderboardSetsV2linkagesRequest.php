<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequest
 */
class GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
