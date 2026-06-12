<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterAchievementsV2linkagesRequest
 */
class GameCenterGroupGameCenterAchievementsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterAchievementsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterAchievementsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
