<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2
 */
class GameCenterLeaderboardSetLocalizationV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetLocalizationV2attributes|Optional $attributes = new Optional,
        public GameCenterLeaderboardSetLocalizationV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
