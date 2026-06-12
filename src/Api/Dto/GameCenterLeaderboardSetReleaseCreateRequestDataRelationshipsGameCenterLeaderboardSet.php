<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterLeaderboardSet
 */
class GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterLeaderboardSet extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterLeaderboardSetData $data,
    ) {}
}
