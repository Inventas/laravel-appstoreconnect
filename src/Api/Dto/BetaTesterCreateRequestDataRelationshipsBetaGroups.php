<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterCreateRequestDataRelationshipsBetaGroups
 */
class BetaTesterCreateRequestDataRelationshipsBetaGroups extends SpatieData
{
    /**
     * @param  array<int, BetaTesterCreateRequestDataRelationshipsBetaGroupsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterCreateRequestDataRelationshipsBetaGroupsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
