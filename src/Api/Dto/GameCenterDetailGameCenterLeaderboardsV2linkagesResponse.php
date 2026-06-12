<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterLeaderboardsV2linkagesResponse
 */
class GameCenterDetailGameCenterLeaderboardsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
