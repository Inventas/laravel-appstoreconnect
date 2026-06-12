<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetRelationshipsGameCenterLeaderboards
 */
class GameCenterLeaderboardSetRelationshipsGameCenterLeaderboards extends SpatieData
{
    /**
     * @param  array<int, GameCenterLeaderboardSetRelationshipsGameCenterLeaderboardsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterLeaderboardSetRelationshipsGameCenterLeaderboardsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
