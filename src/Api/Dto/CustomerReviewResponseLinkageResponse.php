<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseLinkageResponse
 */
class CustomerReviewResponseLinkageResponse extends SpatieData
{
    public function __construct(
        public CustomerReviewResponseLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
