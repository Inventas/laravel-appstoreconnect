<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTestPlayerPropertyInlineCreate
 */
class GameCenterMatchmakingTestPlayerPropertyInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterMatchmakingTestPlayerPropertyInlineCreateAttributes|Optional $attributes = new Optional,
    ) {}
}
