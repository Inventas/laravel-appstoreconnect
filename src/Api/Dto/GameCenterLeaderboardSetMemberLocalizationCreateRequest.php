<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationCreateRequest
 */
class GameCenterLeaderboardSetMemberLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalizationCreateRequestData $data,
    ) {}
}
