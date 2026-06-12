<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupResponse
 */
class GameCenterGroupResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterAchievement|GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterGroup $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterAchievement|GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
