<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2createRequestData
 */
class GameCenterLeaderboardSetV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetV2createRequestDataAttributes $attributes,
        public GameCenterLeaderboardSetV2createRequestDataRelationships $relationships,
    ) {}
}
