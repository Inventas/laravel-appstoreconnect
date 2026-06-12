<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2versionsLinkagesResponse
 */
class GameCenterLeaderboardV2versionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardV2versionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardV2versionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
