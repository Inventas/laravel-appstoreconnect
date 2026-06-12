<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingTeamCreateRequestDataAttributes
 */
class GameCenterMatchmakingTeamCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
        public int $minPlayers,
        public int $maxPlayers,
    ) {}
}
