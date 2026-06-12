<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionRelationshipsLastUpdatedByActor
 */
class ReviewSubmissionRelationshipsLastUpdatedByActor extends SpatieData
{
    public function __construct(
        public ReviewSubmissionRelationshipsLastUpdatedByActorData|Optional $data = new Optional,
    ) {}
}
