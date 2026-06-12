<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2CreateRequest
 */
class GameCenterLeaderboardSetLocalizationV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2createRequestData $data,
    ) {}
}
