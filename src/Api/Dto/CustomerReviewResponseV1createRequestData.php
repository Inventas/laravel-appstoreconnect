<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseV1createRequestData
 */
class CustomerReviewResponseV1createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public CustomerReviewResponseV1createRequestDataAttributes $attributes,
        public CustomerReviewResponseV1createRequestDataRelationships $relationships,
    ) {}
}
