<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2createRequestData
 */
class GameCenterAchievementLocalizationV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementLocalizationV2createRequestDataAttributes $attributes,
        public GameCenterAchievementLocalizationV2createRequestDataRelationships $relationships,
    ) {}
}
