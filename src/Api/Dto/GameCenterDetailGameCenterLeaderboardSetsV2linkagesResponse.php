<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailGameCenterLeaderboardSetsV2linkagesResponse
 */
class GameCenterDetailGameCenterLeaderboardSetsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterLeaderboardSetsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterLeaderboardSetsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
