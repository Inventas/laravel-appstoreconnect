<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationCreateRequestData
 */
class GameCenterAchievementLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementLocalizationCreateRequestDataAttributes $attributes,
        public GameCenterAchievementLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
