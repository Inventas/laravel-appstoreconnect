<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdRelationshipsProfiles
 */
class BundleIdRelationshipsProfiles extends SpatieData
{
    /**
     * @param  array<int, BundleIdRelationshipsProfilesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BundleIdRelationshipsProfilesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
