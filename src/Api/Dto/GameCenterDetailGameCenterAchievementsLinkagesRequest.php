<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailGameCenterAchievementsLinkagesRequest
 */
class GameCenterDetailGameCenterAchievementsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailGameCenterAchievementsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterDetailGameCenterAchievementsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
