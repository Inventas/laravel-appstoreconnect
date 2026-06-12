<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueCreateRequestData
 */
class GameCenterMatchmakingQueueCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterMatchmakingQueueCreateRequestDataAttributes $attributes,
        public GameCenterMatchmakingQueueCreateRequestDataRelationships $relationships,
    ) {}
}
