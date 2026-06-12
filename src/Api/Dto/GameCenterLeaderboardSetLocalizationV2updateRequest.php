<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2UpdateRequest
 */
class GameCenterLeaderboardSetLocalizationV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationV2updateRequestData $data,
    ) {}
}
