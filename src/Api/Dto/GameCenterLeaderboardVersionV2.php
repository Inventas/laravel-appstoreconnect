<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2
 */
class GameCenterLeaderboardVersionV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardVersionV2attributes|Optional $attributes = new Optional,
        public GameCenterLeaderboardVersionV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
