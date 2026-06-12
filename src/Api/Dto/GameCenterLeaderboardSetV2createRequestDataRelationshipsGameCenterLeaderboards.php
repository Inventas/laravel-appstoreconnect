<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboards
 */
class GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboards extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboardsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboardsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
