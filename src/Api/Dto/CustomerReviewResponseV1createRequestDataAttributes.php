<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseV1createRequestDataAttributes
 */
class CustomerReviewResponseV1createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $responseBody,
    ) {}
}
