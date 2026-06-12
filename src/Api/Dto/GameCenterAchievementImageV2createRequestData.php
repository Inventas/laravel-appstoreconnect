<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementImageV2createRequestData
 */
class GameCenterAchievementImageV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementImageV2createRequestDataAttributes $attributes,
        public GameCenterAchievementImageV2createRequestDataRelationships $relationships,
    ) {}
}
