<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueCreateRequestDataRelationshipsRuleSet
 */
class GameCenterMatchmakingQueueCreateRequestDataRelationshipsRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueCreateRequestDataRelationshipsRuleSetData $data,
    ) {}
}
