<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleaseResponse
 */
class GameCenterAchievementReleaseResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievement|GameCenterDetail>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementRelease $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievement|GameCenterDetail>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
