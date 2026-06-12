<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardVersionV2createRequestData
 */
class GameCenterLeaderboardVersionV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardVersionV2createRequestDataRelationships $relationships,
    ) {}
}
