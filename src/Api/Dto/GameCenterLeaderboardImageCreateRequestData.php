<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageCreateRequestData
 */
class GameCenterLeaderboardImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardImageCreateRequestDataAttributes $attributes,
        public GameCenterLeaderboardImageCreateRequestDataRelationships $relationships,
    ) {}
}
