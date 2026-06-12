<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageV2Response
 */
class GameCenterAchievementImageV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalizationV2>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementImageV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementLocalizationV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
