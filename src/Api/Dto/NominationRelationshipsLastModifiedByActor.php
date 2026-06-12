<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationRelationshipsLastModifiedByActor
 */
class NominationRelationshipsLastModifiedByActor extends SpatieData
{
    public function __construct(
        public NominationRelationshipsLastModifiedByActorData|Optional $data = new Optional,
    ) {}
}
