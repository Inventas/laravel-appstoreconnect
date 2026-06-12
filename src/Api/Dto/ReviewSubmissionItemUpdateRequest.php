<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemUpdateRequest
 */
class ReviewSubmissionItemUpdateRequest extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemUpdateRequestData $data,
    ) {}
}
