<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTeamUpdateRequestData
 */
class GameCenterMatchmakingTeamUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterMatchmakingTeamUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
