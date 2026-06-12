<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageResponse
 */
class GameCenterLeaderboardImageResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardLocalization>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardImage $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterLeaderboardLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
