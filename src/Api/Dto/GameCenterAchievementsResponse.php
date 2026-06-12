<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementsResponse
 */
class GameCenterAchievementsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievement>  $data
     * @param  array<int, GameCenterAchievementLocalization|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAchievement> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievementLocalization|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
