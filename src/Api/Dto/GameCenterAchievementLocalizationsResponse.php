<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationsResponse
 */
class GameCenterAchievementLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalization>  $data
     * @param  array<int, GameCenterAchievementImage|GameCenterAchievement>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievementImage|GameCenterAchievement>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
