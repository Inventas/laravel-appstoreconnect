<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingTeamCreateRequestDataRelationships
 */
class GameCenterMatchmakingTeamCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingTeamCreateRequestDataRelationshipsRuleSet $ruleSet,
    ) {}
}
