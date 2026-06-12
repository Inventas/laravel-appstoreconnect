<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleCreateRequestDataRelationships
 */
class GameCenterMatchmakingRuleCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleCreateRequestDataRelationshipsRuleSet $ruleSet,
    ) {}
}
