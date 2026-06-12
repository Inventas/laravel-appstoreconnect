<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardSet
 */
class GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardSet extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardSetData|Optional $data = new Optional,
    ) {}
}
