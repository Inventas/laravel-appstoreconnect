<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildRunRelationshipsBuilds
 */
class CiBuildRunRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, CiBuildRunRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, CiBuildRunRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
