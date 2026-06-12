<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTeamAttributes
 */
class GameCenterMatchmakingTeamAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public int|Optional $minPlayers = new Optional,
        public int|Optional $maxPlayers = new Optional,
    ) {}
}
