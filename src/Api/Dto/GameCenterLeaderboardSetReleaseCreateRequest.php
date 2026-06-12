<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetReleaseCreateRequest
 */
class GameCenterLeaderboardSetReleaseCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseCreateRequestData $data,
    ) {}
}
