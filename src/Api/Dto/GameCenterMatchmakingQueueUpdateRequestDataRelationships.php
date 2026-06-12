<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueUpdateRequestDataRelationships
 */
class GameCenterMatchmakingQueueUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueUpdateRequestDataRelationshipsRuleSet|Optional $ruleSet = new Optional,
        public GameCenterMatchmakingQueueUpdateRequestDataRelationshipsExperimentRuleSet|Optional $experimentRuleSet = new Optional,
    ) {}
}
