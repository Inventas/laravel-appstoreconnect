<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAppStoreVersions
 */
class AppRelationshipsAppStoreVersions extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsAppStoreVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsAppStoreVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
