<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponse
 */
class GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
