<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailLeaderboardReleasesLinkagesResponse
 */
class GameCenterDetailLeaderboardReleasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailLeaderboardReleasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailLeaderboardReleasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
