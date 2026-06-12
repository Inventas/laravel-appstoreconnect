<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueRelationshipsRuleSet
 */
class GameCenterMatchmakingQueueRelationshipsRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueRelationshipsRuleSetData|Optional $data = new Optional,
    ) {}
}
