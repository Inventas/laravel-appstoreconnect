<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupGameCenterLeaderboardsLinkagesResponse
 */
class GameCenterGroupGameCenterLeaderboardsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
