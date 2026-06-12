<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleUpdateRequestDataAttributes
 */
class GameCenterMatchmakingRuleUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $description = new Optional,
        public string|Optional|null $expression = new Optional,
        public int|float|Optional|null $weight = new Optional,
    ) {}
}
