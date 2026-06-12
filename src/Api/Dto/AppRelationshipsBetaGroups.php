<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsBetaGroups
 */
class AppRelationshipsBetaGroups extends SpatieData
{
    /**
     * @param  array<int, AppRelationshipsBetaGroupsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppRelationshipsBetaGroupsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
