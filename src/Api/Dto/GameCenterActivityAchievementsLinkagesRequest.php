<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityAchievementsLinkagesRequest
 */
class GameCenterActivityAchievementsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityAchievementsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterActivityAchievementsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
