<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationshipsLeaderboards
 */
class GameCenterActivityRelationshipsLeaderboards extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityRelationshipsLeaderboardsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterActivityRelationshipsLeaderboardsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
