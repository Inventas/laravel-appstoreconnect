<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2versionsLinkagesResponse
 */
class GameCenterLeaderboardSetV2versionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetV2versionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetV2versionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
