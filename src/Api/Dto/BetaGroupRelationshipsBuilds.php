<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupRelationshipsBuilds
 */
class BetaGroupRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, BetaGroupRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BetaGroupRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
