<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2createRequestDataRelationships
 */
class GameCenterLeaderboardLocalizationV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2createRequestDataRelationshipsVersion $version,
    ) {}
}
