<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageV2createRequestDataRelationships
 */
class GameCenterLeaderboardSetImageV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageV2createRequestDataRelationshipsLocalization $localization,
    ) {}
}
