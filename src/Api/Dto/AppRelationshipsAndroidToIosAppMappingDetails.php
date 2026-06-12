<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAndroidToIosAppMappingDetails
 */
class AppRelationshipsAndroidToIosAppMappingDetails extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsAndroidToIosAppMappingDetailsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsAndroidToIosAppMappingDetailsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
