<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleaseResponse
 */
class GameCenterLeaderboardSetReleaseResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetail|GameCenterLeaderboardSet>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetRelease $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterDetail|GameCenterLeaderboardSet>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
