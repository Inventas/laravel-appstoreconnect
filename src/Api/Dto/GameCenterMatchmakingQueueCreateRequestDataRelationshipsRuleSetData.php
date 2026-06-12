<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueCreateRequestDataRelationshipsRuleSetData
 */
class GameCenterMatchmakingQueueCreateRequestDataRelationshipsRuleSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
