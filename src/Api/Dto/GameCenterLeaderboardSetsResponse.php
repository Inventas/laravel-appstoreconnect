<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetsResponse
 */
class GameCenterLeaderboardSetsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSet>  $data
     * @param  array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetLocalization|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboardSet> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetLocalization|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
