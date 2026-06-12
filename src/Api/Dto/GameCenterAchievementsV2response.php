<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementsV2Response
 */
class GameCenterAchievementsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementV2>  $data
     * @param  array<int, GameCenterAchievementVersionV2|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievementVersionV2|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
