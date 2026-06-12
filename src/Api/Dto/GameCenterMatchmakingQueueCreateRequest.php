<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueCreateRequest
 */
class GameCenterMatchmakingQueueCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueCreateRequestData $data,
    ) {}
}
