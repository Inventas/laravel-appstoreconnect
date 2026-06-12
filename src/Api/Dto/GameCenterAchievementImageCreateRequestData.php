<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageCreateRequestData
 */
class GameCenterAchievementImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementImageCreateRequestDataAttributes $attributes,
        public GameCenterAchievementImageCreateRequestDataRelationships $relationships,
    ) {}
}
