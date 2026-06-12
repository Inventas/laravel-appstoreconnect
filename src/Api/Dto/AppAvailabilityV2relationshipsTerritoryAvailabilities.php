<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2relationshipsTerritoryAvailabilities
 */
class AppAvailabilityV2relationshipsTerritoryAvailabilities extends SpatieData
{
    /**
     * @param  array<int, AppAvailabilityV2relationshipsTerritoryAvailabilitiesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppAvailabilityV2relationshipsTerritoryAvailabilitiesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
