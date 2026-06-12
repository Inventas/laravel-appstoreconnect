<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationUpdateRequestData
 */
class GameCenterLeaderboardSetLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
