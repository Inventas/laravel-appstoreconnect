<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueUpdateRequestDataRelationshipsRuleSet
 */
class GameCenterMatchmakingQueueUpdateRequestDataRelationshipsRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueUpdateRequestDataRelationshipsRuleSetData|Optional $data = new Optional,
    ) {}
}
