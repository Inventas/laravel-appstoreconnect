<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingQueueUpdateRequest
 */
class GameCenterMatchmakingQueueUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingQueueUpdateRequestData $data,
    ) {}
}
