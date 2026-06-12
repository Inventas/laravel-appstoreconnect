<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationsResponse
 */
class GameCenterLeaderboardSetMemberLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetMemberLocalization>  $data
     * @param  array<int, GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetMemberLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
