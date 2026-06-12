<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingTeamResponse
 */
class GameCenterMatchmakingTeamResponse extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingTeam $data,
        public DocumentLinks $links,
    ) {}
}
