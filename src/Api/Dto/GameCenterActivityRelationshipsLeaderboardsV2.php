<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationshipsLeaderboardsV2
 */
class GameCenterActivityRelationshipsLeaderboardsV2 extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityRelationshipsLeaderboardsV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterActivityRelationshipsLeaderboardsV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
