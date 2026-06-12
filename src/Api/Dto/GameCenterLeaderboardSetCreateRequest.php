<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetCreateRequest
 */
class GameCenterLeaderboardSetCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetCreateRequestData $data,
    ) {}
}
