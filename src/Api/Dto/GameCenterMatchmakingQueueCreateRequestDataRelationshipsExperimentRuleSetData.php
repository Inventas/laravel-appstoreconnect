<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueCreateRequestDataRelationshipsExperimentRuleSetData
 */
class GameCenterMatchmakingQueueCreateRequestDataRelationshipsExperimentRuleSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
