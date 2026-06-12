<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationUpdateRequest
 */
class GameCenterLeaderboardSetLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationUpdateRequestData $data,
    ) {}
}
