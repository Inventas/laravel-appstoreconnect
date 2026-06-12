<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleAttributes
 */
class GameCenterMatchmakingRuleAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $description = new Optional,
        public string|Optional $type = new Optional,
        public string|Optional $expression = new Optional,
        public int|float|Optional $weight = new Optional,
    ) {}
}
