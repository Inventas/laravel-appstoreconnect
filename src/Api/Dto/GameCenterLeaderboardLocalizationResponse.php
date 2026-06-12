<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationResponse
 */
class GameCenterLeaderboardLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardImage|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardImage|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
