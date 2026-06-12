<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRelationshipsExperimentRuleSet
 */
class GameCenterMatchmakingQueueRelationshipsExperimentRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueRelationshipsExperimentRuleSetData|Optional $data = new Optional,
    ) {}
}
