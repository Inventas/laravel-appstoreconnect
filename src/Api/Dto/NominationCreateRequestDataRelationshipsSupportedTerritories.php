<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationCreateRequestDataRelationshipsSupportedTerritories
 */
class NominationCreateRequestDataRelationshipsSupportedTerritories extends SpatieData
{
    /**
     * @param  array<int, NominationCreateRequestDataRelationshipsSupportedTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, NominationCreateRequestDataRelationshipsSupportedTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
