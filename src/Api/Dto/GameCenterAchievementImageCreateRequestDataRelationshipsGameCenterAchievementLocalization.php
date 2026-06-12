<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageCreateRequestDataRelationshipsGameCenterAchievementLocalization
 */
class GameCenterAchievementImageCreateRequestDataRelationshipsGameCenterAchievementLocalization extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageCreateRequestDataRelationshipsGameCenterAchievementLocalizationData $data,
    ) {}
}
