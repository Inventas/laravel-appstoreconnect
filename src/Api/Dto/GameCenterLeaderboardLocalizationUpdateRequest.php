<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationUpdateRequest
 */
class GameCenterLeaderboardLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationUpdateRequestData $data,
    ) {}
}
