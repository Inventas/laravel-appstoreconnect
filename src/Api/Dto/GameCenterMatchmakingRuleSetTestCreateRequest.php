<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetTestCreateRequest
 */
class GameCenterMatchmakingRuleSetTestCreateRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingTestPlayerPropertyInlineCreate|GameCenterMatchmakingTestRequestInlineCreate>|Optional  $included
     */
    public function __construct(
        public GameCenterMatchmakingRuleSetTestCreateRequestData $data,
        /** @var array<int, GameCenterMatchmakingTestPlayerPropertyInlineCreate|GameCenterMatchmakingTestRequestInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
