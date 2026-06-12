<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardResponse
 */
class GameCenterLeaderboardResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardLocalization|GameCenterLeaderboardRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboard $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterActivity|GameCenterChallenge|GameCenterDetail|GameCenterGroup|GameCenterLeaderboardLocalization|GameCenterLeaderboardRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
