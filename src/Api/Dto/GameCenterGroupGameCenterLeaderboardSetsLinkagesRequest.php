<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest
 */
class GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardSetsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardSetsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
