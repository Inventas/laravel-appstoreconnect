<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2CreateRequest
 */
class GameCenterLeaderboardV2createRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardVersionV2inlineCreate>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardV2createRequestData $data,
        /** @var array<int, GameCenterLeaderboardVersionV2inlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
