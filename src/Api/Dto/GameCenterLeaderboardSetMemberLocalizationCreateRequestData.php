<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationCreateRequestData
 */
class GameCenterLeaderboardSetMemberLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationships $relationships,
        public GameCenterLeaderboardSetMemberLocalizationCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
