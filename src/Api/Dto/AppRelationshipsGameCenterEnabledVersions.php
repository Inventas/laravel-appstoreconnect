<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsGameCenterEnabledVersions
 */
class AppRelationshipsGameCenterEnabledVersions extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsGameCenterEnabledVersionsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsGameCenterEnabledVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
