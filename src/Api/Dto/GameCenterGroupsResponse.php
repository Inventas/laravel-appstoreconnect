<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupsResponse
 */
class GameCenterGroupsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroup>  $data
     * @param  array<int, GameCenterAchievement|GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterGroup> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievement|GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
