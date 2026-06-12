<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingTeamCreateRequestData
 */
class GameCenterMatchmakingTeamCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterMatchmakingTeamCreateRequestDataAttributes $attributes,
        public GameCenterMatchmakingTeamCreateRequestDataRelationships $relationships,
    ) {}
}
