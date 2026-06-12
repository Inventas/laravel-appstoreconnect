<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardReleasesResponse
 */
class GameCenterLeaderboardReleasesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardRelease>  $data
     * @param  array<int, GameCenterDetail|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardRelease> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
