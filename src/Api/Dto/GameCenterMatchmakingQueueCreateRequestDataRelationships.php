<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueCreateRequestDataRelationships
 */
class GameCenterMatchmakingQueueCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueCreateRequestDataRelationshipsRuleSet $ruleSet,
        public GameCenterMatchmakingQueueCreateRequestDataRelationshipsExperimentRuleSet|Optional $experimentRuleSet = new Optional,
    ) {}
}
