<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2createRequestDataRelationships
 */
class GameCenterAchievementLocalizationV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2createRequestDataRelationshipsVersion $version,
    ) {}
}
