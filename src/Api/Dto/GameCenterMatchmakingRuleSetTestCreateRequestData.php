<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetTestCreateRequestData
 */
class GameCenterMatchmakingRuleSetTestCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterMatchmakingRuleSetTestCreateRequestDataRelationships $relationships,
    ) {}
}
