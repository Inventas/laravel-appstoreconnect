<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationResponse
 */
class GameCenterLeaderboardSetMemberLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSet|GameCenterLeaderboard>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
