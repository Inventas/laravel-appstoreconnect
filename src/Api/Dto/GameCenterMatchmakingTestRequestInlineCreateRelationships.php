<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTestRequestInlineCreateRelationships
 */
class GameCenterMatchmakingTestRequestInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingTestRequestInlineCreateRelationshipsMatchmakingPlayerProperties|Optional $matchmakingPlayerProperties = new Optional,
    ) {}
}
