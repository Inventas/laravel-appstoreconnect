<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationsResponse
 */
class GameCenterLeaderboardLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardLocalization>  $data
     * @param  array<int, GameCenterLeaderboardImage|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardImage|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
