<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetResponse
 */
class GameCenterMatchmakingRuleSetResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingQueue|GameCenterMatchmakingRule|GameCenterMatchmakingTeam>|Optional  $included
     */
    public function __construct(
        public GameCenterMatchmakingRuleSet $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterMatchmakingQueue|GameCenterMatchmakingRule|GameCenterMatchmakingTeam>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
