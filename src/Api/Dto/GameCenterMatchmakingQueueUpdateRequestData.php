<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueUpdateRequestData
 */
class GameCenterMatchmakingQueueUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterMatchmakingQueueUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public GameCenterMatchmakingQueueUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
