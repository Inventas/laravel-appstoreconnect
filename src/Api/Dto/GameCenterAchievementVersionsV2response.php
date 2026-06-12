<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionsV2Response
 */
class GameCenterAchievementVersionsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementVersionV2>  $data
     * @param  array<int, GameCenterAchievementLocalizationV2|GameCenterAchievementV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementVersionV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievementLocalizationV2|GameCenterAchievementV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
