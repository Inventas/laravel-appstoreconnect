<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationRelationshipsRelatedApps
 */
class NominationRelationshipsRelatedApps extends SpatieData
{
    /**
     * @param  array<int, NominationRelationshipsRelatedAppsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, NominationRelationshipsRelatedAppsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
