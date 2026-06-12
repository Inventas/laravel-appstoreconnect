<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRelationships
 */
class GameCenterMatchmakingQueueRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueRelationshipsRuleSet|Optional $ruleSet = new Optional,
        public GameCenterMatchmakingQueueRelationshipsExperimentRuleSet|Optional $experimentRuleSet = new Optional,
    ) {}
}
