<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementV2createRequestDataRelationshipsVersionsDataItem
 */
class GameCenterAchievementV2createRequestDataRelationshipsVersionsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
