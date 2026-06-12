<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest
 */
class GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardSetsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardSetsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
