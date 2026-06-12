<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTeamUpdateRequestDataAttributes
 */
class GameCenterMatchmakingTeamUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int|Optional|null $minPlayers = new Optional,
        public int|Optional|null $maxPlayers = new Optional,
    ) {}
}
