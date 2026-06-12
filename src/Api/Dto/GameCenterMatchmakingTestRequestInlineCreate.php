<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTestRequestInlineCreate
 */
class GameCenterMatchmakingTestRequestInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterMatchmakingTestRequestInlineCreateAttributes|Optional $attributes = new Optional,
        public GameCenterMatchmakingTestRequestInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
