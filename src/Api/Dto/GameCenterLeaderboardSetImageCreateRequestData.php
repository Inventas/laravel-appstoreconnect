<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageCreateRequestData
 */
class GameCenterLeaderboardSetImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetImageCreateRequestDataAttributes $attributes,
        public GameCenterLeaderboardSetImageCreateRequestDataRelationships $relationships,
    ) {}
}
