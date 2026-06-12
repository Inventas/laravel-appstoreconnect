<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetsResponse
 */
class GameCenterMatchmakingRuleSetsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSet>  $data
     * @param  array<int, GameCenterMatchmakingQueue|GameCenterMatchmakingRule|GameCenterMatchmakingTeam>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRuleSet> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterMatchmakingQueue|GameCenterMatchmakingRule|GameCenterMatchmakingTeam>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
