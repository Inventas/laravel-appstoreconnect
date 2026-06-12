<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2localizationsLinkagesResponse
 */
class GameCenterLeaderboardSetVersionV2localizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetVersionV2localizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetVersionV2localizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
