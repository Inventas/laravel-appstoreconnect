<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityAchievementsV2linkagesRequest
 */
class GameCenterActivityAchievementsV2linkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityAchievementsV2linkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterActivityAchievementsV2linkagesRequestDataItem> */
        public array $data,
    ) {}
}
