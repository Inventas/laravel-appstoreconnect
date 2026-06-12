<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsBetaGroups
 */
class BuildRelationshipsBetaGroups extends SpatieData
{
    /**
     * @param  array<int, BuildRelationshipsBetaGroupsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BuildRelationshipsBetaGroupsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
