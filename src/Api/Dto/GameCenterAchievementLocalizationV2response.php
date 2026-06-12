<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2Response
 */
class GameCenterAchievementLocalizationV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementImageV2|GameCenterAchievementVersionV2>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementLocalizationV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementImageV2|GameCenterAchievementVersionV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
