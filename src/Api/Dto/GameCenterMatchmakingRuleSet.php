<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSet
 */
class GameCenterMatchmakingRuleSet extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterMatchmakingRuleSetAttributes|Optional $attributes = new Optional,
        public GameCenterMatchmakingRuleSetRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
