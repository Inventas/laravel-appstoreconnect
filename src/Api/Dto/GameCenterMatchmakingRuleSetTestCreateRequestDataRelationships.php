<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetTestCreateRequestDataRelationships
 */
class GameCenterMatchmakingRuleSetTestCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleSetTestCreateRequestDataRelationshipsMatchmakingRuleSet $matchmakingRuleSet,
        public GameCenterMatchmakingRuleSetTestCreateRequestDataRelationshipsMatchmakingRequests $matchmakingRequests,
    ) {}
}
