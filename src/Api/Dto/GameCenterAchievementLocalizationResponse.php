<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationResponse
 */
class GameCenterAchievementLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementImage|GameCenterAchievement>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementImage|GameCenterAchievement>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
