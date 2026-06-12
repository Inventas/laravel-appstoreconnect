<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleasesResponse
 */
class GameCenterAchievementReleasesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementRelease>  $data
     * @param  array<int, GameCenterAchievement|GameCenterDetail>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementRelease> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievement|GameCenterDetail>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
