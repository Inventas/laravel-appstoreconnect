<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsSubscriptionGroups
 */
class AppRelationshipsSubscriptionGroups extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsSubscriptionGroupsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsSubscriptionGroupsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
