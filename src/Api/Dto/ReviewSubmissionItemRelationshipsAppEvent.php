<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsAppEvent
 */
class ReviewSubmissionItemRelationshipsAppEvent extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsAppEventData|Optional $data = new Optional,
    ) {}
}
