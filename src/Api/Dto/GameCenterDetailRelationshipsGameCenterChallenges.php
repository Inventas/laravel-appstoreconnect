<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsGameCenterChallenges
 */
class GameCenterDetailRelationshipsGameCenterChallenges extends SpatieData
{
    /**
     * @param  array<int, GameCenterDetailRelationshipsGameCenterChallengesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterDetailRelationshipsGameCenterChallengesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
