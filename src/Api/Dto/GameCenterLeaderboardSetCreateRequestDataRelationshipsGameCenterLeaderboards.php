<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterLeaderboards
 */
class GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterLeaderboards extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterLeaderboardsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterLeaderboardsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
