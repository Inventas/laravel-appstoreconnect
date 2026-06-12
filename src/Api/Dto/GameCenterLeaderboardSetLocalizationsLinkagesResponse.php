<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationsLinkagesResponse
 */
class GameCenterLeaderboardSetLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
