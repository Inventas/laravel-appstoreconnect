<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsBuilds
 */
class AppRelationshipsBuilds extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsBuildsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsBuildsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
