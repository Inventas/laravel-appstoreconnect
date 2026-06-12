<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2createRequestDataRelationships
 */
class GameCenterAchievementImageV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageV2createRequestDataRelationshipsLocalization $localization,
    ) {}
}
