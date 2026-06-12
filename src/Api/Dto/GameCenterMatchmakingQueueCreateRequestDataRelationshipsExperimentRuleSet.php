<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueCreateRequestDataRelationshipsExperimentRuleSet
 */
class GameCenterMatchmakingQueueCreateRequestDataRelationshipsExperimentRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueCreateRequestDataRelationshipsExperimentRuleSetData|Optional $data = new Optional,
    ) {}
}
