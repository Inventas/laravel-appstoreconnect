<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2updateRequestData
 */
class GameCenterLeaderboardLocalizationV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardLocalizationV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
