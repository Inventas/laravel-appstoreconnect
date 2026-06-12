<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2createRequestData
 */
class GameCenterLeaderboardSetLocalizationV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetLocalizationV2createRequestDataAttributes $attributes,
        public GameCenterLeaderboardSetLocalizationV2createRequestDataRelationships $relationships,
    ) {}
}
