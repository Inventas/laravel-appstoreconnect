<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardReleaseResponse
 */
class GameCenterLeaderboardReleaseResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetail|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardRelease $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
