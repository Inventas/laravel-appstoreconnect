<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleCreateRequestData
 */
class GameCenterMatchmakingRuleCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterMatchmakingRuleCreateRequestDataAttributes $attributes,
        public GameCenterMatchmakingRuleCreateRequestDataRelationships $relationships,
    ) {}
}
