<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationCreateRequest
 */
class GameCenterLeaderboardSetLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationCreateRequestData $data,
    ) {}
}
