<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetRelationshipsGroupLeaderboardSet
 */
class GameCenterLeaderboardSetRelationshipsGroupLeaderboardSet extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardSetRelationshipsGroupLeaderboardSetData|Optional $data = new Optional,
    ) {}
}
