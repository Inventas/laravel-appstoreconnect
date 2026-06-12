<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardsResponse
 */
class GameCenterLeaderboardsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboard>  $data
     * @param  array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardLocalization|GameCenterLeaderboardRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterLeaderboard> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardLocalization|GameCenterLeaderboardRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
