<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterLeaderboardSets
 */
class GameCenterGroupRelationshipsGameCenterLeaderboardSets extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterLeaderboardSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterLeaderboardSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
