<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageUpdateRequest
 */
class GameCenterLeaderboardSetImageUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageUpdateRequestData $data,
    ) {}
}
