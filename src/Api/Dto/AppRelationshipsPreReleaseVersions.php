<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsPreReleaseVersions
 */
class AppRelationshipsPreReleaseVersions extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsPreReleaseVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsPreReleaseVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
