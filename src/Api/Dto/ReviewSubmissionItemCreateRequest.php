<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemCreateRequest
 */
class ReviewSubmissionItemCreateRequest extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestData $data,
    ) {}
}
