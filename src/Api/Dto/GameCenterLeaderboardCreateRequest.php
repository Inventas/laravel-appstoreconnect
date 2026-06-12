<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardCreateRequest
 */
class GameCenterLeaderboardCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardCreateRequestData $data,
    ) {}
}
