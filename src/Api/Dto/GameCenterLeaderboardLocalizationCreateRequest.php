<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardLocalizationCreateRequest
 */
class GameCenterLeaderboardLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationCreateRequestData $data,
    ) {}
}
