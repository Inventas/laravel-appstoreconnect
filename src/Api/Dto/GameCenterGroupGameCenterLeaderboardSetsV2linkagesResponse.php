<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupGameCenterLeaderboardSetsV2linkagesResponse
 */
class GameCenterGroupGameCenterLeaderboardSetsV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterLeaderboardSetsV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterLeaderboardSetsV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
