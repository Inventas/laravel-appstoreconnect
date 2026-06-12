<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupGameCenterLeaderboardSetsLinkagesResponse
 */
class GameCenterGroupGameCenterLeaderboardSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
