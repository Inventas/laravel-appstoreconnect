<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTestPlayerPropertyInlineCreateAttributes
 */
class GameCenterMatchmakingTestPlayerPropertyInlineCreateAttributes extends SpatieData
{
    /**
     * @param  array<int, Property>|Optional|null  $properties
     */
    public function __construct(
        public string|Optional $playerId = new Optional,
        /** @var array<int, Property>|Optional|null */
        public array|Optional|null $properties = new Optional,
    ) {}
}
