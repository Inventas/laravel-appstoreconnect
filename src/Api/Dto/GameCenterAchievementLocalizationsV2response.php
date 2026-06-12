<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationsV2Response
 */
class GameCenterAchievementLocalizationsV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalizationV2>  $data
     * @param  array<int, GameCenterAchievementImageV2|GameCenterAchievementVersionV2>|Optional  $included
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementLocalizationV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, GameCenterAchievementImageV2|GameCenterAchievementVersionV2>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
