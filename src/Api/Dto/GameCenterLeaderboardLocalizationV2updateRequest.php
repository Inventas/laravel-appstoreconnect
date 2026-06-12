<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2UpdateRequest
 */
class GameCenterLeaderboardLocalizationV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2updateRequestData $data,
    ) {}
}
