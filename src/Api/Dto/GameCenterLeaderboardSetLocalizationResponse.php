<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationResponse
 */
class GameCenterLeaderboardSetLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetImage|GameCenterLeaderboardSet>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetImage|GameCenterLeaderboardSet>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
