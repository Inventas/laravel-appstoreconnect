<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardSetData
 */
class GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
