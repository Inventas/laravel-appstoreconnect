<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementResponse
 */
class GameCenterAchievementResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalization|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievement $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementLocalization|GameCenterAchievementRelease|GameCenterAchievement|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
