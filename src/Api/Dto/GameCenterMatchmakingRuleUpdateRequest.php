<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleUpdateRequest
 */
class GameCenterMatchmakingRuleUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleUpdateRequestData $data,
    ) {}
}
