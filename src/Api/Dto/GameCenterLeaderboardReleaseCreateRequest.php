<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardReleaseCreateRequest
 */
class GameCenterLeaderboardReleaseCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseCreateRequestData $data,
    ) {}
}
