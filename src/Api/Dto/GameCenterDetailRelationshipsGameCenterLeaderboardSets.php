<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsGameCenterLeaderboardSets
 */
class GameCenterDetailRelationshipsGameCenterLeaderboardSets extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsGameCenterLeaderboardSetsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsGameCenterLeaderboardSetsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
