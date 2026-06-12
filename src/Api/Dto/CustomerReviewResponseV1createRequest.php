<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseV1CreateRequest
 */
class CustomerReviewResponseV1createRequest extends SpatieData
{
    public function __construct(
        public CustomerReviewResponseV1createRequestData $data,
    ) {}
}
