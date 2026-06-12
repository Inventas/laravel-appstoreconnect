<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2updateRequestData
 */
class GameCenterLeaderboardSetLocalizationV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetLocalizationV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
