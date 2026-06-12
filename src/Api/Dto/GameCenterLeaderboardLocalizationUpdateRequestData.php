<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationUpdateRequestData
 */
class GameCenterLeaderboardLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
