<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationRelationshipsCreatedByActor
 */
class NominationRelationshipsCreatedByActor extends SpatieData
{
    public function __construct(
        public NominationRelationshipsCreatedByActorData|Optional $data = new Optional,
    ) {}
}
