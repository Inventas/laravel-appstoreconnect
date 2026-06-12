<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetRelationships
 */
class GameCenterMatchmakingRuleSetRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleSetRelationshipsTeams|Optional $teams = new Optional,
        public GameCenterMatchmakingRuleSetRelationshipsRules|Optional $rules = new Optional,
        public GameCenterMatchmakingRuleSetRelationshipsMatchmakingQueues|Optional $matchmakingQueues = new Optional,
    ) {}
}
