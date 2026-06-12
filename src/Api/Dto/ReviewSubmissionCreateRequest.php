<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionCreateRequest
 */
class ReviewSubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public ReviewSubmissionCreateRequestData $data,
    ) {}
}
