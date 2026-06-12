<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleCreateRequest
 */
class GameCenterMatchmakingRuleCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleCreateRequestData $data,
    ) {}
}
