<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboard
 */
class GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboard extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardData|Optional $data = new Optional,
    ) {}
}
