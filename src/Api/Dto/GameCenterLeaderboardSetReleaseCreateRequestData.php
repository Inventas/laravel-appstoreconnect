<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetReleaseCreateRequestData
 */
class GameCenterLeaderboardSetReleaseCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetReleaseCreateRequestDataRelationships $relationships,
    ) {}
}
