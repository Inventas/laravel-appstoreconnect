<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationUpdateRequestDataRelationshipsRelatedApps
 */
class NominationUpdateRequestDataRelationshipsRelatedApps extends SpatieData
{
    /**
     * @param  array<int, NominationUpdateRequestDataRelationshipsRelatedAppsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, NominationUpdateRequestDataRelationshipsRelatedAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
