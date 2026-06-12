<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2inlineCreate
 */
class GameCenterLeaderboardVersionV2inlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterLeaderboardVersionV2inlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
