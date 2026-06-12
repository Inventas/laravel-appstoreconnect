<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationRelationshipsInAppEvents
 */
class NominationRelationshipsInAppEvents extends SpatieData
{
    /**
     * @param  array<int, NominationRelationshipsInAppEventsDataItem>|Optional  $data
     */
    public function __construct(
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, NominationRelationshipsInAppEventsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
