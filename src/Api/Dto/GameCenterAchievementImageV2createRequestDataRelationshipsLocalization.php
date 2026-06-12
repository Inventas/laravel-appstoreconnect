<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2createRequestDataRelationshipsLocalization
 */
class GameCenterAchievementImageV2createRequestDataRelationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageV2createRequestDataRelationshipsLocalizationData $data,
    ) {}
}
