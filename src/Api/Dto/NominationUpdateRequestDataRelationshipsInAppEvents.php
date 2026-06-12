<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationUpdateRequestDataRelationshipsInAppEvents
 */
class NominationUpdateRequestDataRelationshipsInAppEvents extends SpatieData
{
    /**
     * @param  array<int, NominationUpdateRequestDataRelationshipsInAppEventsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, NominationUpdateRequestDataRelationshipsInAppEventsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
