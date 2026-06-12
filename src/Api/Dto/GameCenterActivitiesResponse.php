<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivitiesResponse
 */
class GameCenterActivitiesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivity>  $data
     * @param  array<int, GameCenterAchievement|GameCenterActivityVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterActivity> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievement|GameCenterActivityVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
