<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationUpdateRequest
 */
class GameCenterLeaderboardSetMemberLocalizationUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalizationUpdateRequestData $data,
    ) {}
}
