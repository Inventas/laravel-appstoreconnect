<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2createRequestDataRelationshipsVersion
 */
class GameCenterAchievementLocalizationV2createRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2createRequestDataRelationshipsVersionData $data,
    ) {}
}
