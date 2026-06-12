<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardCreateRequestData
 */
class GameCenterLeaderboardCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardCreateRequestDataAttributes $attributes,
        public GameCenterLeaderboardCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
