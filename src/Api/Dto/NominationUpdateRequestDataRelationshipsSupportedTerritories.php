<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationUpdateRequestDataRelationshipsSupportedTerritories
 */
class NominationUpdateRequestDataRelationshipsSupportedTerritories extends SpatieData
{
    /**
     * @param  array<int, NominationUpdateRequestDataRelationshipsSupportedTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, NominationUpdateRequestDataRelationshipsSupportedTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
