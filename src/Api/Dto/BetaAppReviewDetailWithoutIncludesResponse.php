<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewDetailWithoutIncludesResponse
 */
class BetaAppReviewDetailWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public BetaAppReviewDetail $data,
        public DocumentLinks $links,
    ) {}
}
