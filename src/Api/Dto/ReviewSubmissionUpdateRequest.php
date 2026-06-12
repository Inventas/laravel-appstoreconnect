<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionUpdateRequest
 */
class ReviewSubmissionUpdateRequest extends SpatieData
{
    public function __construct(
        public ReviewSubmissionUpdateRequestData $data,
    ) {}
}
