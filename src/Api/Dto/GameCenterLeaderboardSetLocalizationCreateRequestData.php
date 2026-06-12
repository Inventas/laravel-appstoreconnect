<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationCreateRequestData
 */
class GameCenterLeaderboardSetLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetLocalizationCreateRequestDataAttributes $attributes,
        public GameCenterLeaderboardSetLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
