<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterLeaderboardSetsV2linkagesRequest
 */
class GameCenterDetailGameCenterLeaderboardSetsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardSetsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardSetsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
