<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesResponse
 */
class GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
