<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationUpdateRequestData
 */
class GameCenterLeaderboardSetMemberLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetMemberLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
