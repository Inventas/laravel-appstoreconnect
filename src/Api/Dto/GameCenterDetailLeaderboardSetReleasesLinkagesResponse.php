<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailLeaderboardSetReleasesLinkagesResponse
 */
class GameCenterDetailLeaderboardSetReleasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailLeaderboardSetReleasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailLeaderboardSetReleasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
