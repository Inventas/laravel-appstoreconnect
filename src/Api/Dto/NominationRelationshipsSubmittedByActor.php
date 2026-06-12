<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationRelationshipsSubmittedByActor
 */
class NominationRelationshipsSubmittedByActor extends SpatieData
{
    public function __construct(
        public NominationRelationshipsSubmittedByActorData|Optional $data = new Optional,
    ) {}
}
