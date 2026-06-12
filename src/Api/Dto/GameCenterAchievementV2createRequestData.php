<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementV2createRequestData
 */
class GameCenterAchievementV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementV2createRequestDataAttributes $attributes,
        public GameCenterAchievementV2createRequestDataRelationships $relationships,
    ) {}
}
