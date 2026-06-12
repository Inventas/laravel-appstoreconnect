<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleCreateRequestDataAttributes
 */
class GameCenterMatchmakingRuleCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
        public string $description,
        public string $type,
        public string $expression,
        public int|float|Optional|null $weight = new Optional,
    ) {}
}
