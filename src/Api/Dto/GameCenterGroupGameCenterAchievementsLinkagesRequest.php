<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupGameCenterAchievementsLinkagesRequest
 */
class GameCenterGroupGameCenterAchievementsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupGameCenterAchievementsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterGroupGameCenterAchievementsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
