<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationV2CreateRequest
 */
class GameCenterLeaderboardLocalizationV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationV2createRequestData $data,
    ) {}
}
