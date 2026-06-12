<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementV2createRequestDataRelationshipsVersions
 */
class GameCenterAchievementV2createRequestDataRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementV2createRequestDataRelationshipsVersionsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAchievementV2createRequestDataRelationshipsVersionsDataItem> */
        public array $data,
    ) {}
}
