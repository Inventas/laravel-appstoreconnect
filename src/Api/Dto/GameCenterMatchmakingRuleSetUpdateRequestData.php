<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetUpdateRequestData
 */
class GameCenterMatchmakingRuleSetUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterMatchmakingRuleSetUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
