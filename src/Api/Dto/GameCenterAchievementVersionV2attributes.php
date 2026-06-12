<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2attributes
 */
class GameCenterAchievementVersionV2attributes extends SpatieData
{
    public function __construct(
        public int|Optional $version = new Optional,
        public GameCenterVersionState|Optional $state = new Optional,
    ) {}
}
