<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2localizationsLinkagesResponse
 */
class GameCenterLeaderboardVersionV2localizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardVersionV2localizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardVersionV2localizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
