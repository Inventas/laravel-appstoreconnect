<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleasesResponse
 */
class GameCenterLeaderboardSetReleasesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetRelease>  $data
     * @param  array<int, GameCenterDetail|GameCenterLeaderboardSet>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSetRelease> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterLeaderboardSet>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
