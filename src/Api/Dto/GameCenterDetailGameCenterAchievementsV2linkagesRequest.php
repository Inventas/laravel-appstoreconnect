<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterAchievementsV2linkagesRequest
 */
class GameCenterDetailGameCenterAchievementsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterAchievementsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterAchievementsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
