<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeRelationshipsVersions
 */
class GameCenterChallengeRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeRelationshipsVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterChallengeRelationshipsVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
