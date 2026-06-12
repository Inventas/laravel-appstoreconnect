<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetResponse
 */
class GameCenterLeaderboardSetResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetLocalization|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSet $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterGroup|GameCenterLeaderboardSetLocalization|GameCenterLeaderboardSetRelease|GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
