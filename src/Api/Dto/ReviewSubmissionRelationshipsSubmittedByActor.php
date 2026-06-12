<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionRelationshipsSubmittedByActor
 */
class ReviewSubmissionRelationshipsSubmittedByActor extends SpatieData
{
    public function __construct(
        public ReviewSubmissionRelationshipsSubmittedByActorData|Optional $data = new Optional,
    ) {}
}
