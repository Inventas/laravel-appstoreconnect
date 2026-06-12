<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * UserRelationshipsVisibleApps
 */
class UserRelationshipsVisibleApps extends SpatieData
{
    /**
     * @param  array<int, UserRelationshipsVisibleAppsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, UserRelationshipsVisibleAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
