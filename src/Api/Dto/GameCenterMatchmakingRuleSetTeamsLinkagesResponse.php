<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetTeamsLinkagesResponse
 */
class GameCenterMatchmakingRuleSetTeamsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSetTeamsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRuleSetTeamsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
