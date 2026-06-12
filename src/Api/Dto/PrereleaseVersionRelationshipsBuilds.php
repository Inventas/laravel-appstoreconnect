<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersionRelationshipsBuilds
 */
class PrereleaseVersionRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, PrereleaseVersionRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, PrereleaseVersionRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
