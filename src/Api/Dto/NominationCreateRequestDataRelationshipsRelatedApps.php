<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * NominationCreateRequestDataRelationshipsRelatedApps
 */
class NominationCreateRequestDataRelationshipsRelatedApps extends SpatieData
{
    /**
     * @param  array<int, NominationCreateRequestDataRelationshipsRelatedAppsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, NominationCreateRequestDataRelationshipsRelatedAppsDataItem> */
        public array $data,
    ) {}
}
