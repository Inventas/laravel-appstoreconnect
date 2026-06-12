<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetUpdateRequest
 */
class GameCenterMatchmakingRuleSetUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleSetUpdateRequestData $data,
    ) {}
}
