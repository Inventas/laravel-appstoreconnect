<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationshipsGameCenterChallenges
 */
class GameCenterGroupRelationshipsGameCenterChallenges extends SpatieData
{
    /**
     * @param  array<int, GameCenterGroupRelationshipsGameCenterChallengesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterGroupRelationshipsGameCenterChallengesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
