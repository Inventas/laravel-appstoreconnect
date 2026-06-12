<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageResponse
 */
class GameCenterLeaderboardSetImageResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetLocalization>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetImage $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardSetLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
