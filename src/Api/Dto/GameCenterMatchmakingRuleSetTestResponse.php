<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetTestResponse
 */
class GameCenterMatchmakingRuleSetTestResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingTestPlayerProperty|GameCenterMatchmakingTestRequest>|Optional  $included
     */
    public function __construct(
        public GameCenterMatchmakingRuleSetTest $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterMatchmakingTestPlayerProperty|GameCenterMatchmakingTestRequest>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
