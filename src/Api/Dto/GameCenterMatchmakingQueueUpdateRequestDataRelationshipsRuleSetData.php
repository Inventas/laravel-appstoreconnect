<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueUpdateRequestDataRelationshipsRuleSetData
 */
class GameCenterMatchmakingQueueUpdateRequestDataRelationshipsRuleSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
