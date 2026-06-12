<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2Response
 */
class GameCenterAchievementVersionV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalizationV2|GameCenterAchievementV2>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementVersionV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementLocalizationV2|GameCenterAchievementV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
