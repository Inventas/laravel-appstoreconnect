<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageResponse
 */
class GameCenterAchievementImageResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementLocalization>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementImage $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
