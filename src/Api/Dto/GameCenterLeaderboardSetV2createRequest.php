<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2CreateRequest
 */
class GameCenterLeaderboardSetV2createRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetVersionV2inlineCreate>|Optional  $included
     */
    public function __construct(
        public GameCenterLeaderboardSetV2createRequestData $data,
        /** @var array<int, GameCenterLeaderboardSetVersionV2inlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
