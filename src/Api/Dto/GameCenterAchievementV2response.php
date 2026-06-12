<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementV2Response
 */
class GameCenterAchievementV2response extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievementVersionV2|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional  $included
     */
    public function __construct(
        public GameCenterAchievementV2 $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievementVersionV2|GameCenterActivity|GameCenterDetail|GameCenterGroup>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
