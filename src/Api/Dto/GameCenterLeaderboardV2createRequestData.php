<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2createRequestData
 */
class GameCenterLeaderboardV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardV2createRequestDataAttributes $attributes,
        public GameCenterLeaderboardV2createRequestDataRelationships $relationships,
    ) {}
}
