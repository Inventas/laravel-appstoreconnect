<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueuesResponse
 */
class GameCenterMatchmakingQueuesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingQueue>  $data
     * @param  array<int, GameCenterMatchmakingRuleSet>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingQueue> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterMatchmakingRuleSet>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
