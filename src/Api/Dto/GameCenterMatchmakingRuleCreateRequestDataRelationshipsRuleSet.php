<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleCreateRequestDataRelationshipsRuleSet
 */
class GameCenterMatchmakingRuleCreateRequestDataRelationshipsRuleSet extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleCreateRequestDataRelationshipsRuleSetData $data,
    ) {}
}
