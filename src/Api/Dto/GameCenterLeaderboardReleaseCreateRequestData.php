<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardReleaseCreateRequestData
 */
class GameCenterLeaderboardReleaseCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardReleaseCreateRequestDataRelationships $relationships,
    ) {}
}
