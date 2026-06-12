<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingTeamCreateRequest
 */
class GameCenterMatchmakingTeamCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingTeamCreateRequestData $data,
    ) {}
}
