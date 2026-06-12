<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleasesLinkagesResponse
 */
class GameCenterLeaderboardSetReleasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetReleasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetReleasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
