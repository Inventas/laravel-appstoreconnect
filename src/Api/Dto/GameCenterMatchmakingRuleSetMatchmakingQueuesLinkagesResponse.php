<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetMatchmakingQueuesLinkagesResponse
 */
class GameCenterMatchmakingRuleSetMatchmakingQueuesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSetMatchmakingQueuesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRuleSetMatchmakingQueuesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
