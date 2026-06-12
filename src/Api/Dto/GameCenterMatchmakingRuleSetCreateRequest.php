<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetCreateRequest
 */
class GameCenterMatchmakingRuleSetCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRuleSetCreateRequestData $data,
    ) {}
}
