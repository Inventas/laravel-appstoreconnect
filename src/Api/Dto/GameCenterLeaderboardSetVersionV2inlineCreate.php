<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2inlineCreate
 */
class GameCenterLeaderboardSetVersionV2inlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterLeaderboardSetVersionV2inlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
