<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageCreateRequest
 */
class GameCenterLeaderboardSetImageCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageCreateRequestData $data,
    ) {}
}
