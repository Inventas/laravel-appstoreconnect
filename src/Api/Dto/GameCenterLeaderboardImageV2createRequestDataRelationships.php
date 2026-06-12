<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageV2createRequestDataRelationships
 */
class GameCenterLeaderboardImageV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageV2createRequestDataRelationshipsLocalization $localization,
    ) {}
}
