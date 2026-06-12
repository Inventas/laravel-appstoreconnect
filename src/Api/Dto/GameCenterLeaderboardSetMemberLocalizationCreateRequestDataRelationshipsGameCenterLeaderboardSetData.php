<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationshipsGameCenterLeaderboardSetData
 */
class GameCenterLeaderboardSetMemberLocalizationCreateRequestDataRelationshipsGameCenterLeaderboardSetData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
