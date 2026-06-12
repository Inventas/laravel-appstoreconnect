<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetCreateRequestData
 */
class GameCenterMatchmakingRuleSetCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterMatchmakingRuleSetCreateRequestDataAttributes $attributes,
    ) {}
}
