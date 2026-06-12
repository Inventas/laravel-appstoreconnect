<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterLeaderboardSetsLinkagesResponse
 */
class GameCenterDetailGameCenterLeaderboardSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
