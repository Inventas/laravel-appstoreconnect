<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueResponse
 */
class GameCenterMatchmakingQueueResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSet>|Optional  $included
     */
    public function __construct(
        public GameCenterMatchmakingQueue $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterMatchmakingRuleSet>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
