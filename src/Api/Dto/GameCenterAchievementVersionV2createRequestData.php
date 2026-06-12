<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementVersionV2createRequestData
 */
class GameCenterAchievementVersionV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterAchievementVersionV2createRequestDataRelationships $relationships,
    ) {}
}
