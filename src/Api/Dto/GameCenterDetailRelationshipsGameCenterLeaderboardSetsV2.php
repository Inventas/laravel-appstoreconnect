<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2
 */
class GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2 extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2dataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2dataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
