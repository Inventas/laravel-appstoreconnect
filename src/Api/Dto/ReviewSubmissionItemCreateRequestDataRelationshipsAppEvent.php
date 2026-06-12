<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsAppEvent
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsAppEvent extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppEventData|Optional $data = new Optional,
    ) {}
}
