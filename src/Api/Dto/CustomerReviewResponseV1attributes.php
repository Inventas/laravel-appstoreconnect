<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewResponseV1attributes
 */
class CustomerReviewResponseV1attributes extends SpatieData
{
    public function __construct(
        public string|Optional $responseBody = new Optional,
        public string|Optional $lastModifiedDate = new Optional,
        public string|Optional $state = new Optional,
    ) {}
}
