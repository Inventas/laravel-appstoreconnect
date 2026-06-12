<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterLeaderboards
 */
class GameCenterGroupRelationshipsGameCenterLeaderboards extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterLeaderboardsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterLeaderboardsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
