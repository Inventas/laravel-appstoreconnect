<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2createRequestDataRelationships
 */
class GameCenterLeaderboardSetLocalizationV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2createRequestDataRelationshipsVersion $version,
    ) {}
}
