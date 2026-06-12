<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityResponse
 */
class GameCenterActivityResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievement|GameCenterActivityVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterActivity $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievement|GameCenterActivityVersion|GameCenterDetail|GameCenterGroup|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
