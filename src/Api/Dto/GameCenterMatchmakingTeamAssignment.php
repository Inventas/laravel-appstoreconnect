<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTeamAssignment
 */
class GameCenterMatchmakingTeamAssignment extends SpatieData
{
    public function __construct(
        public string|Optional $playerId = new Optional,
        public string|Optional $team = new Optional,
    ) {}
}
