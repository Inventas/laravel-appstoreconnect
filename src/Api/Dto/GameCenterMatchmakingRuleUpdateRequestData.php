<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleUpdateRequestData
 */
class GameCenterMatchmakingRuleUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterMatchmakingRuleUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
