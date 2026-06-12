<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleResponse
 */
class GameCenterMatchmakingRuleResponse extends SpatieData
{
    public function __construct(
        public GameCenterMatchmakingRule $data,
        public DocumentLinks $links,
    ) {}
}
