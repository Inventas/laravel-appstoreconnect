<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetVersionV2createRequestData
 */
class GameCenterLeaderboardSetVersionV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetVersionV2createRequestDataRelationships $relationships,
    ) {}
}
