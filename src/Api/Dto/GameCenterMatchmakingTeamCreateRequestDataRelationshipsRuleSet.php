<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingTeamCreateRequestDataRelationshipsRuleSet
 */
class GameCenterMatchmakingTeamCreateRequestDataRelationshipsRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingTeamCreateRequestDataRelationshipsRuleSetData $data,
    ) {}
}
