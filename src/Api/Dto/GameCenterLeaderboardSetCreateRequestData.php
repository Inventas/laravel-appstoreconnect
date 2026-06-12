<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetCreateRequestData
 */
class GameCenterLeaderboardSetCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetCreateRequestDataAttributes $attributes,
        public GameCenterLeaderboardSetCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
