<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationCreateRequestDataRelationshipsInAppEvents
 */
class NominationCreateRequestDataRelationshipsInAppEvents extends SpatieData
{
    /**
     * @param  array<int, NominationCreateRequestDataRelationshipsInAppEventsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, NominationCreateRequestDataRelationshipsInAppEventsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
