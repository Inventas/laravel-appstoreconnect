<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueUpdateRequestDataRelationshipsExperimentRuleSet
 */
class GameCenterMatchmakingQueueUpdateRequestDataRelationshipsExperimentRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueUpdateRequestDataRelationshipsExperimentRuleSetData|Optional $data = new Optional,
    ) {}
}
