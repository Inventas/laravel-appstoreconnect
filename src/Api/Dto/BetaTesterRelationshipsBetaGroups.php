<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterRelationshipsBetaGroups
 */
class BetaTesterRelationshipsBetaGroups extends SpatieData
{
    /**
     * @param  array<int, BetaTesterRelationshipsBetaGroupsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BetaTesterRelationshipsBetaGroupsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
